<?php
namespace modeloFicha;
use PDO;

include_once("../Entidad/ficha.entidad.php");
include_once("conexion.php");
class Ficha{
   private $ficha;
   private $programa;
   private $aprendices;
    private $conexion;
    private $consulta;
    private $resultado;
    private $retorno;
    public function __construct(\entidadFicha\Ficha $FichaE)
    {
        $this->conexion = new \Conexion();
        $this->ficha=$FichaE->getFicha();  
        $this->programa=$FichaE->getPrograma();  
        $this->aprendices=$FichaE->getAprendices();  
    }

    public function crearFicha()
    {
       $this->consulta="INSERT INTO fichas VALUES('$this->ficha', '$this->programa')";
       $this->resultado=$this->conexion->con->prepare($this->consulta);
       $this->resultado->execute();
       if($this->resultado->rowCount()>=1){
            $this->retorno = 1;
       }
       else{
            $this->retorno=0;
       }

         foreach($this->aprendices as $ep=>$aprendiz)
         {
               $nombre = $aprendiz['Nombre'];
               $apellidos = $aprendiz['Apellidos'];
               $tipo_identificacion = $aprendiz['Tipo de Documento'];  
               $identificacion = $aprendiz['Número de Documento'];
               $celular = $aprendiz['Celular'];        
               $correo = $aprendiz['Correo Electrónico'];
               $pass = password_hash($identificacion, PASSWORD_ARGON2I);
               $this->consulta="INSERT INTO personas VALUES('$tipo_identificacion', '$identificacion', '$nombre', '$apellidos', '$celular', '$correo', '$pass', 'aprendiz')";
               $this->resultado=$this->conexion->con->prepare($this->consulta);
               $this->resultado->execute();

               $this->consulta="INSERT INTO aprendices VALUES(null, '$this->ficha', '$identificacion ')";
               $this->resultado=$this->conexion->con->prepare($this->consulta);
               $this->resultado->execute();
         } 
         
       return $this->retorno;
    }

    public function mostrarFichas()
    {
      $this->consulta="SELECT fichas.id_ficha, programas.nombrePrograma, programas.id_programa FROM programas
      INNER JOIN fichas ON programas.id_programa=fichas.id_programa"; 
       $this->resultado=$this->conexion->con->prepare($this->consulta);
       $this->resultado->execute();
       return $this->resultado->fetchAll(PDO::FETCH_ASSOC);
    }

    public function eliminarFicha()
    {
       $this->consulta="DELETE FROM fichas WHERE id_ficha='$this->ficha'";
       $this->resultado=$this->conexion->con->prepare($this->consulta);
       $this->resultado->execute();
       if($this->resultado->rowCount()>=1){
         $this->retorno=1;
      }
      else{
      $this->retorno=0;
      }
      return $this->retorno;
    }

    public function consultarEditar()
    {
       $this->consulta="SELECT fichas.id_ficha, programas.nombrePrograma, programas.id_programa FROM programas
       INNER JOIN fichas ON programas.id_programa=fichas.id_programa WHERE id_Ficha='$this->ficha'";
       $this->resultado=$this->conexion->con->prepare($this->consulta);
       $this->resultado->execute();
       $this->retorno = $this->resultado->fetchAll(PDO::FETCH_ASSOC);

       $this->consulta="SELECT personas.* FROM aprendices INNER JOIN personas ON aprendices.idPersona=personas.identificacion WHERE aprendices.idFicha='$this->ficha'";
       $this->resultado=$this->conexion->con->prepare($this->consulta);
       $this->resultado->execute();
       array_push($this->retorno, $this->resultado->fetchAll(PDO::FETCH_ASSOC));


       return $this->retorno;
    }

    public function editarFicha()
    {
         $this->consulta="UPDATE fichas SET id_programa='$this->programa', id_ficha='$this->ficha' WHERE id_Ficha='$this->ficha'";
         $this->resultado=$this->conexion->con->prepare($this->consulta);
         $this->resultado->execute();
         if($this->resultado->rowCount()>=1){
              $this->retorno=1;
         }
         else{
           $this->retorno=0;
         }
         return $this->retorno;       
    }

    public function ConsultarAprendices()
    {
       //SELECT fichas.id_ficha, programas.nombrePrograma, programas.id_programa FROM programas INNER JOIN fichas ON programas.id_programa=fichas.id_programa
      $this->consulta="SELECT aprendices.idAprendiz, personas.nombres, personas.apellidos FROM personas INNER JOIN aprendices ON personas.identificacion=aprendices.idPersona WHERE idFicha='$this->ficha'"; 
       $this->resultado=$this->conexion->con->prepare($this->consulta);
       $this->resultado->execute();       
       $this->retorno = array();
      foreach($this->resultado->fetchAll(PDO::FETCH_ASSOC) as $ep=>$det)
      {
         $id = $det['idAprendiz'];
         $nombres = $det['nombres'];
         $apellidos = $det['apellidos'];
         $this->consulta="SELECT * FROM aprendices_proyectos INNER JOIN aprendices ON aprendices_proyectos.idAprendiz=aprendices.idAprendiz WHERE aprendices.idAprendiz ='$id'"; 
         $this->resultado=$this->conexion->con->prepare($this->consulta);
         $this->resultado->execute();
         if(!$this->resultado->rowCount()>=1){
            array_push($this->retorno, ['id' => $id, 'nombre' => $nombres." ".$apellidos]);
         }
      }
      return $this->retorno; 
    }
}

?>
<?php
namespace modeloPrograma;
use PDO;

include_once("../Entidad/programa.entidad.php");
include_once("conexion.php");
class Programa{
    private $idPrograma;
    private $nombrePrograma;
    private $tipoPrograma;
    private $conexion;
    private $consulta;
    private $resultado;
    private $retorno;
    public function __construct(\entidadPrograma\Programa $ProgramaE)
    {
        $this->conexion = new \Conexion();
        $this->idPrograma=$ProgramaE->getIdPrograma();  
        $this->nombrePrograma=$ProgramaE->getNombrePrograma();  
        $this->tipoPrograma=$ProgramaE->getTipoPrograma();  
    }

    public function crearPrograma()
    {
       $this->consulta="INSERT INTO programas VALUES('$this->idPrograma', '$this->nombrePrograma', '$this->tipoPrograma')";
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

    public function mostrarProgramas()
    {
       $this->consulta="SELECT * FROM programas";
       $this->resultado=$this->conexion->con->prepare($this->consulta);
       $this->resultado->execute();
       return $this->resultado->fetchAll(PDO::FETCH_ASSOC);
    }

    public function eliminarPrograma()
    {
       $this->consulta="DELETE FROM programas WHERE id_programa='$this->idPrograma'";
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
       $this->consulta="SELECT * FROM programas WHERE id_programa='$this->idPrograma'";
       $this->resultado=$this->conexion->con->prepare($this->consulta);
       $this->resultado->execute();
       return $this->resultado->fetchAll(PDO::FETCH_ASSOC);
    }

    public function editarPrograma()
    {
         $this->consulta="UPDATE programas SET nombrePrograma='$this->nombrePrograma', tipoPrograma='$this->tipoPrograma' WHERE id_programa='$this->idPrograma'";
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
}

?>
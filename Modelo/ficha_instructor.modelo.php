<?php
namespace modeloFichaInstructor;
use PDO;

include_once("../Entidad/ficha_instructor.entidad.php");
include_once("conexion.php");
class FichaInstructor{
    private $idFichaInstructor;
    private $idFicha;
    private $idInstructor;
    private $conexion;
    private $consulta;
    private $resultado;
    private $retorno;
    public function __construct(\entidadFichaInstructor\FichaInstructor $FichaInstructorE)
    {
        $this->conexion = new \Conexion();
        $this->idFichaInstructor=$FichaInstructorE->getIdFichaInstructor();  
        $this->idFicha=$FichaInstructorE->getIdFicha();  
        $this->idInstructor=$FichaInstructorE->getIdInstructor();  
    }

    public function crearFichaInstructor()
    {
       $this->consulta="INSERT INTO fichas_instructores VALUES(null, '$this->idFicha', '$this->idInstructor')";
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

    public function mostrarFichaInstructors()
    {
       $this->consulta="SELECT fichas_instructores.idFichaInstructor, fichas_instructores.id_ficha, personas.nombres FROM fichas_instructores INNER JOIN instructores ON fichas_instructores.id_instructor= instructores.idInstructor INNER JOIN personas ON personas.identificacion= instructores.id_persona";
       $this->resultado=$this->conexion->con->prepare($this->consulta);
       $this->resultado->execute();
       return $this->resultado->fetchAll(PDO::FETCH_ASSOC);
    }

    public function eliminarFichaInstructor()
    {
       $this->consulta="DELETE FROM fichas_instructores WHERE idFichaInstructor='$this->idFichaInstructor'";
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
       $this->consulta="SELECT fichas_instructores.idFichaInstructor,fichas_instructores.id_ficha, personas.nombres FROM fichas_instructores INNER JOIN instructores ON fichas_instructores.id_instructor= instructores.idInstructor INNER JOIN personas ON personas.identificacion= instructores.id_persona WHERE fichas_instructores.idFichaInstructor='$this->idFichaInstructor'";
       $this->resultado=$this->conexion->con->prepare($this->consulta);
       $this->resultado->execute();
       return $this->resultado->fetchAll(PDO::FETCH_ASSOC);
    }

    public function editarFichaInstructor()
    {
         $this->consulta="UPDATE fichas_instructores SET id_ficha='$this->idFicha', id_instructor='$this->idInstructor' WHERE idFichaInstructor='$this->idFichaInstructor'";
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

    public function ConsultarFichasInstructor()
    {
       $this->consulta="SELECT fichas_instructores.idFichaInstructor,fichas_instructores.id_ficha FROM fichas_instructores INNER JOIN instructores ON fichas_instructores.id_instructor= instructores.idInstructor INNER JOIN personas ON personas.identificacion= instructores.id_persona WHERE personas.identificacion='$this->idInstructor'";
       $this->resultado=$this->conexion->con->prepare($this->consulta);
       $this->resultado->execute();
       return $this->resultado->fetchAll(PDO::FETCH_ASSOC);
    }

    public function dataListInstructor()
    {
       $this->consulta="SELECT personas.nombres, personas.apellidos, instructores.idInstructor FROM instructores INNER JOIN personas ON personas.identificacion=instructores.id_persona INNER JOIN fichas_instructores ON fichas_instructores.id_instructor=instructores.idInstructor WHERE fichas_instructores.id_ficha='$this->idFicha'";
       $this->resultado=$this->conexion->con->prepare($this->consulta);
       $this->resultado->execute();
       return $this->resultado->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>
<?php
namespace modeloInstructor;
use PDO;

include_once("../Entidad/instructor.entidad.php");
include_once("conexion.php");
class Instructor{
   private $tipoDoc;
   private $doc;
   private $nombres;
   private $apellidos;
   private $celular;
   private $correo;
   private $pass;
   private $profesion;
   private $descripcion;
    private $conexion;
    private $consulta;
    private $resultado;
    private $retorno;
    public function __construct(\entidadInstructor\Instructor $InstructorE)
    {
        $this->conexion = new \Conexion();
        $this->tipoDoc=$InstructorE->getTipoDoc();  
        $this->doc=$InstructorE->getDoc();  
        $this->nombres=$InstructorE->getNombres();  
        $this->apellidos=$InstructorE->getApellidos();  
        $this->celular=$InstructorE->getCelular();  
        $this->correo=$InstructorE->getCorreo();    
        $this->pass=$InstructorE->getPass();  
        $this->profesion=$InstructorE->getProfesion();
        $this->descripcion=$InstructorE->getDescripcion();  
        
    }

    public function crearInstructor()
    {
      $pass = password_hash($this->doc, PASSWORD_ARGON2I);
      $this->consulta="INSERT INTO personas VALUES('$this->tipoDoc', '$this->doc', '$this->nombres', '$this->apellidos', '$this->celular', '$this->correo', '$pass', 'instructor')";
       $this->resultado=$this->conexion->con->prepare($this->consulta);
       $this->resultado->execute();
       if($this->resultado->rowCount()>=1){
            $this->consulta="INSERT INTO instructores VALUES(null, '$this->doc', '$this->profesion', '$this->descripcion')";
            $this->resultado=$this->conexion->con->prepare($this->consulta);
            $this->resultado->execute();
            if($this->resultado->rowCount()>=1){
               $this->retorno=1;
            }
            else{
            $this->retorno=0;
            }
       }
       else{
        $this->retorno=0;
       }
       
       return $this->retorno;


    }

    public function mostrarInstructors()
    {
      $this->consulta="SELECT * FROM personas INNER JOIN instructores ON instructores.id_persona=personas.identificacion"; 
       $this->resultado=$this->conexion->con->prepare($this->consulta);
       $this->resultado->execute();
       return $this->resultado->fetchAll(PDO::FETCH_ASSOC);
    }

    public function eliminarInstructor()
    {
       $this->consulta="DELETE FROM instructores WHERE idInstructor='$this->doc'";
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
      $this->consulta="SELECT * FROM personas INNER JOIN instructores ON instructores.id_persona=personas.identificacion WHERE idInstructor='$this->doc'";
       $this->resultado=$this->conexion->con->prepare($this->consulta);
       $this->resultado->execute();
       return $this->resultado->fetchAll(PDO::FETCH_ASSOC);
    }

    public function editarInstructor()
    {
         $this->consulta="UPDATE personas SET tipo_identificacion='$this->tipoDoc', nombres='$this->nombres', apellidos='$this->apellidos', celular='$this->celular', correo='$this->correo' WHERE identificacion='$this->doc'";
         $this->resultado=$this->conexion->con->prepare($this->consulta);
         $this->resultado->execute();
         if($this->resultado->rowCount()>=1){
            $this->retorno += 1;
         }
         else{
           $this->retorno += 0;
         }

         $this->consulta="UPDATE instructores SET profesion='$this->profesion', descripcion='$this->descripcion' WHERE id_persona='$this->doc'";
         $this->resultado=$this->conexion->con->prepare($this->consulta);
         $this->resultado->execute();
         if($this->resultado->rowCount()>=1){
               $this->retorno += 1;
         }
         else{
            $this->retorno += 0;
         }
         return $this->retorno;       
    }
}

?>
<?php
namespace modeloLogin;
use PDO;

include_once("../Entidad/login.entidad.php");
include_once("conexion.php");
class Login{
   private $correo;
   private $pass;
   private $id;
   private $nueva;
    private $conexion;
    private $consulta;
    private $resultado;
    private $retorno;
    public function __construct(\entidadLogin\Login $LoginE)
    {
        $this->conexion = new \Conexion(); 
        $this->correo=$LoginE->getCorreo();    
        $this->pass=$LoginE->getPass();   
        $this->id=$LoginE->getId();    
        $this->nueva=$LoginE->getNueva();          
    }

    public function login()
    {
       $this->consulta="SELECT rol, password, identificacion, nombres FROM personas WHERE correo='$this->correo'";
       $this->resultado=$this->conexion->con->prepare($this->consulta);
       $this->resultado->execute();
       if($this->resultado->rowCount()>=1){
            
           foreach ($this->resultado->fetchAll(PDO::FETCH_ASSOC) as $dato) {
            if (password_verify($this->pass, $dato['password']))  {
                session_start();
                $_SESSION['rol'] = $dato['rol'];
                $_SESSION['id'] = $dato['identificacion'];
                $_SESSION['nombre'] = $dato['nombres'];
                $id = $_SESSION['id'];
                switch ($_SESSION['rol']) {
                    case 'instructor':
                        $this->consulta="SELECT instructores.idInstructor FROM personas INNER JOIN instructores ON personas.identificacion=instructores.id_persona WHERE personas.identificacion='$id'";
                        $this->resultado=$this->conexion->con->prepare($this->consulta);
                        $this->resultado->execute();
                        foreach ($this->resultado->fetchAll(PDO::FETCH_ASSOC) as $dato) {
                            $_SESSION['idInstructor'] = $dato['idInstructor'];
                        }   
                        break;
                    case 'aprendiz':
                        $this->consulta="SELECT aprendices.idAprendiz, aprendices.idFicha FROM personas INNER JOIN aprendices ON personas.identificacion=aprendices.idPersona WHERE personas.identificacion='$id'";
                        $this->resultado=$this->conexion->con->prepare($this->consulta);
                        $this->resultado->execute();
                        foreach ($this->resultado->fetchAll(PDO::FETCH_ASSOC) as $dato) {
                            $_SESSION['idAprendiz'] = $dato['idAprendiz'];
                            $_SESSION['idFicha'] = $dato['idFicha'];
                        }   
                        break;
                    default:
                        break;
                }
                $this->retorno=$_SESSION['rol'];
            }
            else{
                $this->retorno='Clave Incorrecta por favor intente nuevamente';
            }
           }
            
       }
       else{
        $this->retorno='Hay un error de autenticación por favor vuelva a intentarlo';
       }
       return $this->retorno;
    }

    public function salir()
    {
       session_start();      
       $this->retorno='Hasta Pronto '.$_SESSION['nombre'];
       session_destroy();
       return $this->retorno;
    }

    public function cambiarClave()
    {
        $this->consulta="SELECT password FROM personas WHERE identificacion='$this->id'";
        $this->resultado=$this->conexion->con->prepare($this->consulta);
        $this->resultado->execute();
        foreach ($this->resultado->fetchAll(PDO::FETCH_ASSOC) as $dato) {
            if (password_verify($this->pass, $dato['password'])){
                $pass = password_hash($this->nueva, PASSWORD_ARGON2I);
                $this->consulta="UPDATE personas SET password='$pass' WHERE identificacion='$this->id'";
                $this->resultado=$this->conexion->con->prepare($this->consulta);
                $this->resultado->execute();
                if($this->resultado->rowCount()>=1){
                    $this->retorno="La clave se cambio con exito.";
                }
                else{
                    $this->retorno="No se logro cambiar la clave.";
                }            
            }
            else{
                $this->retorno="Clave Anterior es incorrecta.";
            }
        }   
        return $this->retorno;       
    }
}

?>
<?php
namespace modeloGruposProyecto;
use PDO;

include_once("../Entidad/gruposProyecto.entidad.php");
include_once("conexion.php");
class GruposProyecto{
   private $idGruposProyecto;
   private $nombre;
   private $descripcion;
   private $aprendices;
   private $items;
   private $instructor;
    private $conexion;
    private $consulta;
    private $resultado;
    private $retorno;
    public function __construct(\entidadGruposProyecto\GruposProyecto $GruposProyectoE)
    {
        $this->conexion = new \Conexion();
        $this->idGruposProyecto=$GruposProyectoE->getIdGruposProyecto();  
        $this->nombre=$GruposProyectoE->getNombre(); 
        $this->descripcion=$GruposProyectoE->getDescripcion();  
        $this->aprendices=$GruposProyectoE->getAprendices(); 
        $this->items=$GruposProyectoE->getItems(); 
        $this->instructor=$GruposProyectoE->getInstructor();  
    }

    public function crearGruposProyecto()
    {
       $this->consulta="INSERT INTO proyectos VALUES(null, '$this->nombre', '$this->descripcion', 'En Proceso', '', '$this->instructor')";
       $this->resultado=$this->conexion->con->prepare($this->consulta);
       $this->resultado->execute();
       $idProyecto = $this->conexion->con->lastInsertId();
       if($this->resultado->rowCount()>=1){
            for ($i=0; $i < count($this->items); $i++) { 
               $nombre = $this->items[$i];
               $this->consulta="INSERT INTO items VALUES(null, '$nombre', 'En Proceso', '')";
               $this->resultado=$this->conexion->con->prepare($this->consulta);
               $this->resultado->execute();
               $idItem = $this->conexion->con->lastInsertId();
               $this->consulta="INSERT INTO proyectos_items VALUES(null, '$idProyecto', '$idItem ')";
               $this->resultado=$this->conexion->con->prepare($this->consulta);
               $this->resultado->execute();
            }
            foreach($this->aprendices as $i=>$aprendiz)
            {
                  $idAprendiz = $aprendiz['idAprendiz'];
                  $this->consulta="INSERT INTO aprendices_proyectos VALUES(null, '$idAprendiz', '$idProyecto')";
                  $this->resultado=$this->conexion->con->prepare($this->consulta);
                  $this->resultado->execute();
            }
            $this->retorno =1;
         }
         else{
            $this->retorno=0;
         }
       return $this->retorno;
    }

    public function mostrarGruposProyectos()
    {
      $this->consulta="SELECT * FROM proyectos WHERE idInstructor='$this->instructor' AND estado='En Proceso'";
      $this->resultado=$this->conexion->con->prepare($this->consulta);
      $this->resultado->execute();
      $this->retorno = $this->resultado->fetchAll(PDO::FETCH_ASSOC);
      foreach ($this->retorno as $i=>$dato) {
         $idProyecto = $dato['idProyecto'];
         $this->consulta="SELECT personas.nombres, personas.apellidos FROM aprendices_proyectos INNER JOIN aprendices ON aprendices_proyectos.idAprendiz=aprendices.idAprendiz INNER JOIN personas ON aprendices.idPersona=personas.identificacion WHERE aprendices_proyectos.idProyecto='$idProyecto'";
         $this->resultado=$this->conexion->con->prepare($this->consulta);
         $this->resultado->execute();
         array_push($this->retorno[$i], $this->resultado->fetchAll(PDO::FETCH_ASSOC));

         $this->consulta="SELECT items.nombreItem FROM proyectos_items INNER JOIN items ON proyectos_items.idItems=items.idItem WHERE proyectos_items.idProyecto='$idProyecto'";
         $this->resultado=$this->conexion->con->prepare($this->consulta);
         $this->resultado->execute();
         array_push($this->retorno[$i], $this->resultado->fetchAll(PDO::FETCH_ASSOC));
      } 
      return $this->retorno;
    }
    
    public function quitarItem()
    {
      $this->consulta="DELETE FROM items WHERE idItem='$this->items'";
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

    public function quitarAprendiz()
    {
      $this->consulta="DELETE FROM aprendices_proyectos WHERE idAprendiz='$this->aprendices'";
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

    public function eliminarGruposProyecto()
    {
      $this->consulta="SELECT items.idItem FROM items INNER JOIN proyectos_items ON items.idItem=proyectos_items.idItems WHERE proyectos_items.idProyecto='$this->idGruposProyecto'";
      $this->resultado=$this->conexion->con->prepare($this->consulta);
      $this->resultado->execute();
      foreach ($this->resultado->fetchAll(PDO::FETCH_ASSOC) as $i=>$dato) {
         $idItem = $dato['idItem'];
         $this->consulta="DELETE FROM items WHERE idItem='$idItem'";
         $this->resultado=$this->conexion->con->prepare($this->consulta);
         $this->resultado->execute();
         if($this->resultado->rowCount()>=1){
            $this->retorno +=1;
         }
         else{
            $this->retorno +=0;
         }
      }
      
       $this->consulta="DELETE FROM proyectos WHERE idProyecto='$this->idGruposProyecto'";
       $this->resultado=$this->conexion->con->prepare($this->consulta);
       $this->resultado->execute();
       if($this->resultado->rowCount()>=1){
         $this->retorno +=1;
      }
      else{
         $this->retorno +=0;
      }
      return $this->retorno;
    }

    public function consultarEditar()
    {
      $this->consulta="SELECT * FROM proyectos WHERE idProyecto='$this->idGruposProyecto'";
      $this->resultado=$this->conexion->con->prepare($this->consulta);
      $this->resultado->execute();
      $this->retorno = $this->resultado->fetchAll(PDO::FETCH_ASSOC);
      
      $this->consulta="SELECT personas.nombres, personas.apellidos, aprendices.idAprendiz FROM aprendices_proyectos INNER JOIN aprendices ON aprendices_proyectos.idAprendiz=aprendices.idAprendiz INNER JOIN personas ON aprendices.idPersona=personas.identificacion WHERE aprendices_proyectos.idProyecto='$this->idGruposProyecto'";
      $this->resultado=$this->conexion->con->prepare($this->consulta);
      $this->resultado->execute();
      array_push($this->retorno[0], $this->resultado->fetchAll(PDO::FETCH_ASSOC));

      $this->consulta="SELECT items.idItem, items.nombreItem FROM proyectos_items INNER JOIN items ON proyectos_items.idItems=items.idItem WHERE proyectos_items.idProyecto='$this->idGruposProyecto'";
      $this->resultado=$this->conexion->con->prepare($this->consulta);
      $this->resultado->execute();
      array_push($this->retorno[0], $this->resultado->fetchAll(PDO::FETCH_ASSOC));
      
      return $this->retorno;
    }

    public function editarGruposProyecto()
    {
         $this->consulta="UPDATE proyectos SET nombreProyecto='$this->nombre', descripcionProyecto='$this->descripcion' WHERE idProyecto='$this->idGruposProyecto'";
         $this->resultado=$this->conexion->con->prepare($this->consulta);
         $this->resultado->execute();
         if($this->resultado->rowCount()>=1){
            $this->retorno+=1;
         }
         else{
            $this->retorno+=0;
         }
         
         
         for ($i=0; $i < count($this->items); $i++) { 
            $nombre = $this->items[$i];
            $this->consulta="INSERT INTO items VALUES(null, '$nombre', 'En Proceso', '')";
            $this->resultado=$this->conexion->con->prepare($this->consulta);
            $this->resultado->execute();
            $idItem = $this->conexion->con->lastInsertId();
            $this->consulta="INSERT INTO proyectos_items VALUES(null, '$this->idGruposProyecto', '$idItem ')";
            $this->resultado=$this->conexion->con->prepare($this->consulta);
            $this->resultado->execute();
            if($this->resultado->rowCount()>=1){
               $this->retorno+=1;
            }
            else{
               $this->retorno+=0;
            }
         }
         foreach($this->aprendices as $i=>$aprendiz)
         {
               $idAprendiz = $aprendiz['idAprendiz'];
               $this->consulta="INSERT INTO aprendices_proyectos VALUES(null, '$idAprendiz', '$this->idGruposProyecto')";
               $this->resultado=$this->conexion->con->prepare($this->consulta);
               $this->resultado->execute();
               if($this->resultado->rowCount()>=1){
                  $this->retorno+=1;
               }
               else{
                  $this->retorno+=0;
               }
         }


         return $this->retorno;       
    }

    
    public function ConsultarProyectosAprendiz()
    {
      $this->consulta="SELECT proyectos.* FROM aprendices_proyectos INNER JOIN proyectos ON aprendices_proyectos.idProyecto=proyectos.idProyecto WHERE aprendices_proyectos.idAprendiz='$this->aprendices'";
      $this->resultado=$this->conexion->con->prepare($this->consulta);
      $this->resultado->execute();
      return $this->resultado->fetchAll(PDO::FETCH_ASSOC);    
    }

    public function propuesta()
    {
       $this->consulta="INSERT INTO proyectos VALUES(null, '$this->nombre', '$this->descripcion', 'Propuesta', '', '$this->instructor')";
       $this->resultado=$this->conexion->con->prepare($this->consulta);
       $this->resultado->execute();
       $idProyecto = $this->conexion->con->lastInsertId();
       if($this->resultado->rowCount()>=1){
            foreach($this->aprendices as $i=>$aprendiz)
            {
                  $idAprendiz = $aprendiz['idAprendiz'];
                  $this->consulta="INSERT INTO aprendices_proyectos VALUES(null, '$idAprendiz', '$idProyecto')";
                  $this->resultado=$this->conexion->con->prepare($this->consulta);
                  $this->resultado->execute();
            }
            $this->retorno =1;
         }
         else{
            $this->retorno=0;
         }
       return $this->retorno;
    }

    public function mostrarPropuestas()
    {
      $this->consulta="SELECT proyectos.* FROM proyectos INNER JOIN fichas_instructores ON proyectos.idInstructor=fichas_instructores.id_instructor WHERE (fichas_instructores.id_ficha='$this->idGruposProyecto' OR fichas_instructores.id_instructor='$this->instructor') AND (proyectos.estado='Propuesta' OR proyectos.estado='Propuesta Rechazada')";
      $this->resultado=$this->conexion->con->prepare($this->consulta);
      $this->resultado->execute();
      $this->retorno = $this->resultado->fetchAll(PDO::FETCH_ASSOC);
      foreach ($this->retorno as $i=>$dato) {
         $idProyecto = $dato['idProyecto'];
         $this->consulta="SELECT personas.nombres, personas.apellidos FROM aprendices_proyectos INNER JOIN aprendices ON aprendices_proyectos.idAprendiz=aprendices.idAprendiz INNER JOIN personas ON aprendices.idPersona=personas.identificacion WHERE aprendices_proyectos.idProyecto='$idProyecto'";
         $this->resultado=$this->conexion->con->prepare($this->consulta);
         $this->resultado->execute();
         array_push($this->retorno[$i], $this->resultado->fetchAll(PDO::FETCH_ASSOC));
      } 
      return $this->retorno;
    }

   public function AceptarPropuesta()
   {
         $this->consulta="UPDATE proyectos SET estado='En Proceso' WHERE idProyecto='$this->idGruposProyecto'";
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

   public function publicarProyecto()
   {
         $fecha = date("Y-m-d");
         $this->consulta="UPDATE proyectos SET estado='Publicado', fechaPublicacion='$fecha' WHERE idProyecto='$this->idGruposProyecto'";
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

   public function proyectoPublicados()
   {
      $this->consulta="SELECT * FROM proyectos WHERE estado='Publicado'";
      $this->resultado=$this->conexion->con->prepare($this->consulta);
      $this->resultado->execute();
      $this->retorno = $this->resultado->fetchAll(PDO::FETCH_ASSOC);
      return $this->retorno;
   }

   public function descargar()
   {
      
     $this->consulta="SELECT items.url, proyectos.nombreProyecto FROM proyectos INNER JOIN proyectos_items ON proyectos.idProyecto=proyectos_items.idProyecto INNER JOIN items ON proyectos_items.idItems=items.idItem WHERE proyectos_items.idProyecto='$this->idGruposProyecto'";
     $this->resultado=$this->conexion->con->prepare($this->consulta);
     $this->resultado->execute();
      return $this->resultado->fetchAll(PDO::FETCH_ASSOC);
   }
}

?>
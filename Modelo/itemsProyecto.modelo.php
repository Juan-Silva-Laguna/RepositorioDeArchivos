<?php
namespace modeloItemsProyecto;
use PDO;

include_once("../Entidad/itemsProyecto.entidad.php");
include_once("conexion.php");
class ItemsProyecto{
    private $idItemsProyecto;
    private $nombre;
    private $estado;
    private $url;
    private $conexion;
    private $consulta;
    private $resultado;
    private $retorno;
    public function __construct(\entidadItemsProyecto\ItemsProyecto $ItemsProyectoE)
    {
        $this->conexion = new \Conexion();
        $this->idItemsProyecto=$ItemsProyectoE->getIdItemsProyecto();  
        $this->nombre=$ItemsProyectoE->getNombre(); 
        $this->estado=$ItemsProyectoE->getEstado();  
        $this->url=$ItemsProyectoE->getUrl(); 
    }

    public function mostrarItemsProyectos()
    {
      $this->consulta="SELECT items.* FROM proyectos_items INNER JOIN items ON proyectos_items.idItems=items.idItem WHERE proyectos_items.idProyecto='$this->idItemsProyecto'";
      $this->resultado=$this->conexion->con->prepare($this->consulta);
      $this->resultado->execute();
      return $this->resultado->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function aprobar()
    {
         $this->consulta="UPDATE items SET estadoItem='Aprobado' WHERE idItem='$this->idItemsProyecto'";
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

    public function rechazar()
    {
         unlink($this->url);
         $this->consulta="UPDATE items SET estadoItem='Rechazado', url='' WHERE idItem='$this->idItemsProyecto'";
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

    public function enviarItem()
    {
         $this->consulta="UPDATE items SET estadoItem='Sin Revisar', url='$this->url' WHERE idItem='$this->idItemsProyecto'";
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

    public function eliminar()
    {
         unlink($this->url);
         $this->consulta="UPDATE items SET estadoItem='En Proceso', url='' WHERE idItem='$this->idItemsProyecto'";
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
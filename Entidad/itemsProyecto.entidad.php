<?php
namespace entidadItemsProyecto;
class ItemsProyecto{
    private $idItemsProyecto;
    private $nombre;
    private $estado;
    private $url;

    /**
     * Get the value of idItemsProyecto
     */ 
    public function getIdItemsProyecto()
    {
        return $this->idItemsProyecto;
    }

    /**
     * Set the value of idItemsProyecto
     *
     * @return  self
     */ 
    public function setIdItemsProyecto($idItemsProyecto)
    {
        $this->idItemsProyecto = $idItemsProyecto;

        return $this;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    } 

    /**
     * Get the value of estado
     */ 
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set the value of estado
     *
     * @return  self
     */ 
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    } 

    /**
     * Get the value of url
     */ 
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set the value of url
     *
     * @return  self
     */ 
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    } 
}

?>
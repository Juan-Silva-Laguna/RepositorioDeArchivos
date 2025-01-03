<?php
namespace entidadGruposProyecto;
class GruposProyecto{
    private $idGruposProyecto;
    private $nombre;
    private $descripcion;
    private $aprendices;
    private $items;
    private $instructor;

    /**
     * Get the value of idGruposProyecto
     */ 
    public function getIdGruposProyecto()
    {
        return $this->idGruposProyecto;
    }

    /**
     * Set the value of idGruposProyecto
     *
     * @return  self
     */ 
    public function setIdGruposProyecto($idGruposProyecto)
    {
        $this->idGruposProyecto = $idGruposProyecto;

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
     * Get the value of descripcion
     */ 
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     *
     * @return  self
     */ 
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    } 

    /**
     * Get the value of aprendices
     */ 
    public function getAprendices()
    {
        return $this->aprendices;
    }

    /**
     * Set the value of aprendices
     *
     * @return  self
     */ 
    public function setAprendices($aprendices)
    {
        $this->aprendices = $aprendices;

        return $this;
    } 

    /**
     * Get the value of items
     */ 
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Set the value of items
     *
     * @return  self
     */ 
    public function setItems($items)
    {
        $this->items = $items;

        return $this;
    } 

    /**
     * Get the value of instructor
     */ 
    public function getInstructor()
    {
        return $this->instructor;
    }

    /**
     * Set the value of instructor
     *
     * @return  self
     */ 
    public function setInstructor($instructor)
    {
        $this->instructor = $instructor;

        return $this;
    }
}

?>
<?php
namespace entidadInstructor;
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

    /**
     * Get the value of tipoDoc
     */ 
    public function getTipoDoc()
    {
        return $this->tipoDoc;
    }

    /**
     * Set the value of tipoDoc
     *
     * @return  self
     */ 
    public function setTipoDoc($tipoDoc)
    {
        $this->tipoDoc = $tipoDoc;

        return $this;
    }

    /**
     * Get the value of doc
     */ 
    public function getDoc()
    {
        return $this->doc;
    }

    /**
     * Set the value of doc
     *
     * @return  self
     */ 
    public function setDoc($doc)
    {
        $this->doc = $doc;

        return $this;
    } 

    /**
     * Get the value of doc
     */ 
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * Set the value of nombres
     *
     * @return  self
     */ 
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;

        return $this;
    } 

    /**
     * Get the value of doc
     */ 
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set the value of apellidos
     *
     * @return  self
     */ 
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    } 

    /**
     * Get the value of celular
     */ 
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * Set the value of celular
     *
     * @return  self
     */ 
    public function setCelular($celular)
    {
        $this->celular = $celular;

        return $this;
    } 

    /**
     * Get the value of correo
     */ 
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * Set the value of correo
     *
     * @return  self
     */ 
    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    } 

    /**
     * Get the value of pass
     */ 
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * Set the value of pass
     *
     * @return  self
     */ 
    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    } 

    /**
     * Get the value of profesion
     */ 
    public function getProfesion()
    {
        return $this->profesion;
    }

    /**
     * Set the value of profesion
     *
     * @return  self
     */ 
    public function setProfesion($profesion)
    {
        $this->profesion = $profesion;

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
}

?>
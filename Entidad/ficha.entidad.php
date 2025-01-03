<?php
namespace entidadFicha;
class Ficha{
    private $ficha;
    private $programa;
    private $aprendices;

    /**
     * Get the value of ficha
     */ 
    public function getFicha()
    {
        return $this->ficha;
    }

    /**
     * Set the value of ficha
     *
     * @return  self
     */ 
    public function setFicha($ficha)
    {
        $this->ficha = $ficha;

        return $this;
    }

    /**
     * Get the value of programa
     */ 
    public function getPrograma()
    {
        return $this->programa;
    }

    /**
     * Set the value of programa
     *
     * @return  self
     */ 
    public function setPrograma($programa)
    {
        $this->programa = $programa;

        return $this;
    } 

    /**
     * Get the value of programa
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
}

?>
<?php
namespace entidadFichaInstructor;
class FichaInstructor{
    private $idFichaInstructor;
    private $idFicha;
    private $idInstructor;

    /**
     * Get the value of idFichaInstructor
     */ 
    public function getIdFichaInstructor()
    {
        return $this->idFichaInstructor;
    }

    /**
     * Set the value of idFichaInstructor
     *
     * @return  self
     */ 
    public function setIdFichaInstructor($idFichaInstructor)
    {
        $this->idFichaInstructor = $idFichaInstructor;

        return $this;
    }

  /**
     * Get the value of idFicha
     */ 
    public function getIdFicha()
    {
        return $this->idFicha;
    }

    /**
     * Set the value of idFicha
     *
     * @return  self
     */ 
    public function setIdFicha($idFicha)
    {
        $this->idFicha = $idFicha;

        return $this;
    }

    /**
     * Get the value of idInstructor
     */ 
    public function getIdInstructor()
    {
        return $this->idInstructor;
    }

    /**
     * Set the value of idInstructor
     *
     * @return  self
     */ 
    public function setIdInstructor($idInstructor)
    {
        $this->idInstructor = $idInstructor;

        return $this;
    }
}

?>
<?php
namespace entidadPrograma;
class Programa{
    private $idPrograma;
    private $nombrePrograma;
    private $tipoPrograma;

    /**
     * Get the value of idPrograma
     */ 
    public function getIdPrograma()
    {
        return $this->idPrograma;
    }

    /**
     * Set the value of idPrograma
     *
     * @return  self
     */ 
    public function setIdPrograma($idPrograma)
    {
        $this->idPrograma = $idPrograma;

        return $this;
    }

    /**
     * Get the value of nombrePrograma
     */ 
    public function getNombrePrograma()
    {
        return $this->nombrePrograma;
    }

    /**
     * Set the value of nombrePrograma
     *
     * @return  self
     */ 
    public function setNombrePrograma($nombrePrograma)
    {
        $this->nombrePrograma = $nombrePrograma;

        return $this;
    } 

    /**
     * Get the value of nombrePrograma
     */ 
    public function getTipoPrograma()
    {
        return $this->tipoPrograma;
    }

    /**
     * Set the value of tipoPrograma
     *
     * @return  self
     */ 
    public function setTipoPrograma($tipoPrograma)
    {
        $this->tipoPrograma = $tipoPrograma;

        return $this;
    } 
}

?>
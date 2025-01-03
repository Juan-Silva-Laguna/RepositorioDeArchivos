<?php
namespace entidadLogin;
class Login{
    private $correo;
    private $pass;
    private $id;
    private $nueva;
    
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
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nueva
     */ 
    public function getNueva()
    {
        return $this->nueva;
    }

    /**
     * Set the value of nueva
     *
     * @return  self
     */ 
    public function setNueva($nueva)
    {
        $this->nueva = $nueva;

        return $this;
    } 
}

?>
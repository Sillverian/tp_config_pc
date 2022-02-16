<?php

namespace TpConfigPc\models\types;
use TpConfigPc\dao\EntityInterface;

class TypeRAM implements EntityInterface
{

    // PROPRIETES
    private ?int $idTypeRam = null;
    private string $type;
    private int $frequence;
    private int $capaciteRam;

    

    // GETTERS

    /**
     * Get the value of idTypeRam
     */
    public function getIdTypeRam()
    {
        return $this->idTypeRam;
    }

    /**
     * Get the value of type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Get the value of frequence
     */
    public function getFrequence()
    {
        return $this->frequence;
    }

    /**
     * Get the value of capaciteRam
     */
    public function getCapaciteRam()
    {
        return $this->capaciteRam;
    }

    // SETTERS

    /**
     * Set the value of idTypeRam
     * @return  self
     */ 
    public function setIdTypeRam($idTypeRam)
    {
        $this->idTypeRam = $idTypeRam;
        return $this;
    }

    /**
     * Set the value of type
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Set the value of frequence
     * @return  self
     */ 
    public function setFrequence($frequence)
    {
        $this->frequence = $frequence;
        return $this;
    }

    /**
     * Set the value of capaciteRam
     * @return  self
     */ 
    public function setCapaciteRam($capaciteRam)
    {
        $this->capaciteRam = $capaciteRam;
        return $this;
    }
}

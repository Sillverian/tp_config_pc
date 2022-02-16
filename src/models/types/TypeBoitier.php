<?php

namespace TpConfigPc\models\types;

use TpConfigPc\dao\EntityInterface;

class TypeBoitier implements EntityInterface
{

    //PROPRIETES
    private ?int $idTypeBoitier = null;
    private string $typeBoitier;
    private TypeCarteMere $typeCarteMere;

    //GETTERS

    /**
     * Get the value of idTypeBoitier
     */
    public function getIdTypeBoitier()
    {
        return $this->idTypeBoitier;
    }

    /**
     * Get the value of typeBoitier
     */
    public function getTypeBoitier()
    {
        return $this->typeBoitier;
    }

    /**
     * Get the value of typeCarteMere
     */
    public function getTypeCarteMere()
    {
        return $this->typeCarteMere;
    }

    //SETTERS

    /**
     * Set the value of idTypeBoitier
     *
     * @return  self
     */
    public function setIdTypeBoitier($idTypeBoitier)
    {
        $this->idTypeBoitier = $idTypeBoitier;

        return $this;
    }

    /**
     * Set the value of typeBoitier
     *
     * @return  self
     */
    public function setTypeBoitier($typeBoitier)
    {
        $this->typeBoitier = $typeBoitier;

        return $this;
    }

    /**
     * Set the value of typeCarteMere
     *
     * @return  self
     */
    public function setTypeCarteMere($typeCarteMere)
    {
        $this->typeCarteMere = $typeCarteMere;

        return $this;
    }
}

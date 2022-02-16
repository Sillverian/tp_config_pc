<?php

namespace TpConfigPc\models\types;

use TpConfigPc\models\Connecteur;
use TpConfigPc\dao\EntityInterface;

class TypeDisque implements EntityInterface
{

    //PROPRIETES
    private ?int $idTypeDisque = null;
    private string $type;
    private int $capacite;
    private Connecteur $connecteur;

  

    //GETTERS

    /**
     * Get the value of idTypeDisque
     */
    public function getIdTypeDisque()
    {
        return $this->idTypeDisque;
    }

    /**
     * Get the value of type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Get the value of capacite
     */
    public function getCapacite()
    {
        return $this->capacite;
    }

    /**
     * Get the value of connecteur
     */
    public function getConnecteur()
    {
        return $this->connecteur;
    }

    //SETTERS

    /**
     * Set the value of idTypeDisque
     *
     * @return  self
     */
    public function setIdTypeDisque($idTypeDisque)
    {
        $this->idTypeDisque = $idTypeDisque;

        return $this;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Set the value of capacite
     *
     * @return  self
     */
    public function setCapacite($capacite)
    {
        $this->capacite = $capacite;

        return $this;
    }

    /**
     * Set the value of connecteur
     *
     * @return  self
     */
    public function setConnecteur($connecteur)
    {
        $this->connecteur = $connecteur;

        return $this;
    }
}

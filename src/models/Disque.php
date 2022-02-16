<?php

namespace TpConfigPc\models;

use TpConfigPc\models\types\TypeDisque;
use TpConfigPc\dao\EntityInterface;

class Disque implements EntityInterface
{
    //PROPRIETES
    private ?int $idDisque = null;
    private string $marque;
    private string $nomProduit;
    private float $prix;
    private TypeDisque $typeDisque;

 

    //GETTERS

    /**
     * Get the value of idDisque
     */
    public function getIdDisque()
    {
        return $this->idDisque;
    }

    /**
     * Get the value of marque
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Get the value of nomProduit
     */
    public function getNomProduit()
    {
        return $this->nomProduit;
    }

    /**
     * Get the value of prix
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Get the value of typeDisque
     */
    public function getTypeDisque()
    {
        return $this->typeDisque;
    }

    //SETTERS

    /**
     * Set the value of idDisque
     *
     * @return  self
     */
    public function setIdDisque($idDisque)
    {
        $this->idDisque = $idDisque;

        return $this;
    }

    /**
     * Set the value of marque
     *
     * @return  self
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Set the value of nomProduit
     *
     * @return  self
     */
    public function setNomProduit($nomProduit)
    {
        $this->nomProduit = $nomProduit;

        return $this;
    }

    /**
     * Set the value of prix
     *
     * @return  self
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Set the value of typeDisque
     *
     * @return  self
     */
    public function setTypeDisque($typeDisque)
    {
        $this->typeDisque = $typeDisque;

        return $this;
    }
}

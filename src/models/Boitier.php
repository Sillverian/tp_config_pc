<?php

namespace TpConfigPc\models;

use TpConfigPc\dao\EntityInterface;
use TpConfigPc\models\types\TypeBoitier;

class Boitier implements EntityInterface
{
    //PROPRIETES
    private ?int $idBoitier = null;
    private string $marque;
    private string $nomProduit;
    private float $prix;
    private TypeBoitier $typeBoitier;

   

    //GETTERS

    /**
     * Get the value of idBoitier
     */
    public function getIdBoitier()
    {
        return $this->idBoitier;
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
     * Get the value of typeBoitier
     */
    public function getTypeBoitier()
    {
        return $this->typeBoitier;
    }

    // SETTERS

    /**
     * Set the value of idBoitier
     *
     * @return  self
     */
    public function setIdBoitier($idBoitier)
    {
        $this->idBoitier = $idBoitier;

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
     * Set the value of typeBoitier
     *
     * @return  self
     */
    public function setTypeBoitier($typeBoitier)
    {
        $this->typeBoitier = $typeBoitier;

        return $this;
    }
}

<?php

namespace TpConfigPc\models;

use TpConfigPc\models\types\TypeCarteMere;
use TpConfigPc\dao\EntityInterface;

class CarteMere implements EntityInterface
{

    //PROPRIETES
    private ?int $idCarteMere = null;
    private string $marque;
    private string $nomProduit;
    private float $prix;
    private TypeCarteMere $typeCarteMere;

    

    //GETTERS

    /**
     * Get the value of idCarteMere
     */
    public function getIdCarteMere()
    {
        return $this->idCarteMere;
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
     * Get the value of typeCarteMere
     */
    public function getTypeCarteMere()
    {
        return $this->typeCarteMere;
    }

    //SETTERS

    /**
     * Set the value of idCarteMere
     *
     * @return  self
     */
    public function setIdCarteMere($idCarteMere)
    {
        $this->idCarteMere = $idCarteMere;

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

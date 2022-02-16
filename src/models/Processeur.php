<?php

namespace TpConfigPc\models;

use TpConfigPc\models\types\TypeProcesseur;
use TpConfigPc\dao\EntityInterface;

class Processeur implements EntityInterface
{
    // PROPRIETES
    private ?int $idProcesseur = null;
    private string $nomProduit;
    private float $prix;
    private TypeProcesseur $typeProcesseur;


    // GETTERS

    /**
     * Get the value of idProcesseur
     */
    public function getIdProcesseur()
    {
        return $this->idProcesseur;
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
     * Get the value of typeProcesseur
     */
    public function getTypeProcesseur()
    {
        return $this->typeProcesseur;
    }

    // SETTERS

    /**
     * Set the value of idProcesseur
     * @return  self
     */
    public function setIdProcesseur($idProcesseur)
    {
        $this->idProcesseur = $idProcesseur;
        return $this;
    }

    /**
     * Set the value of nomProduit
     * @return  self
     */
    public function setNomProduit($nomProduit)
    {
        $this->nomProduit = $nomProduit;
        return $this;
    }

    /**
     * Set the value of prix
     * @return  self
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
        return $this;
    }

    /**
     * Set the value of typeProcesseur
     * @return  self
     */
    public function setTypeProcesseur($typeProcesseur)
    {
        $this->typeProcesseur = $typeProcesseur;
        return $this;
    }
}

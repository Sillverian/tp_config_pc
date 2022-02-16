<?php

namespace TpConfigPc\models;

use TpConfigPc\models\types\TypeRAM;
use TpConfigPc\dao\EntityInterface;

class RAM implements EntityInterface
{
    // PROPRIETES
    private ?int $idRam = null;
    private string $marque;
    private string $nomProduit;
    private float $prix;
    private TypeRAM $typeRam;

    // GETTERS

    /**
     * Get the value of idRam
     */
    public function getIdRam()
    {
        return $this->idRam;
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
     * Get the value of typeRam
     */
    public function getTypeRam()
    {
        return $this->typeRam;
    }

    // SETTERS

    /**
     * Set the value of idRam
     * @return  self
     */
    public function setIdRam($idRam)
    {
        $this->idRam = $idRam;
        return $this;
    }

    /**
     * Set the value of marque
     * @return  self
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;
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
     * Set the value of typeRam
     * @return  self
     */
    public function setTypeRam($typeRam)
    {
        $this->typeRam = $typeRam;
        return $this;
    }
}

<?php

namespace TpConfigPc\models;

use TpConfigPc\models\types\TypeCarteGraphique;
use TpConfigPc\dao\EntityInterface;

class CarteGraphique implements EntityInterface
{

    // PROPRIETES
    private ?int $idCarteGraphique = null;
    private string $marque;
    private string $nomProduit;
    private float $prix;
    private TypeCarteGraphique $typeCarteGraphique;

    
    

    // GETTERS

    /**
     * Get the value of idCarteGraphique
     */
    public function getIdCarteGraphique()
    {
        return $this->idCarteGraphique;
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
     * Get the value of typeCarteGraphique
     */
    public function getTypeCarteGraphique()
    {
        return $this->typeCarteGraphique;
    }

    //SETTERS

    /**
     * Set the value of idCarteGraphique
     * @return  self
     */
    public function setIdCarteGraphique($idCarteGraphique)
    {
        $this->idCarteGraphique = $idCarteGraphique;
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
     * Set the value of typeCarteGraphique
     * @return  self
     */
    public function setTypeCarteGraphique($typeCarteGraphique)
    {
        $this->typeCarteGraphique = $typeCarteGraphique;
        return $this;
    }
}

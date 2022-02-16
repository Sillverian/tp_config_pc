<?php

namespace TpConfigPc\models;

use TpConfigPc\dao\EntityInterface;

class Configuration implements EntityInterface
{
    //PROPRIETES
    private ?int $idConfig;
    private string $nomConfig;
    private CarteMere $carteMere;
    private Boitier $boitier;
    private Processeur $processeur;
    private CarteGraphique $carteGraphique;
    private Utilisateur $utilisateur;

    

    //GETTERS

    /**
     * Get the value of idConfig
     */
    public function getIdConfig()
    {
        return $this->idConfig;
    }

    /**
     * Get the value of nomConfig
     */
    public function getNomConfig()
    {
        return $this->nomConfig;
    }

    /**
     * Get the value of carteMere
     */
    public function getCarteMere()
    {
        return $this->carteMere;
    }

    /**
     * Get the value of boitier
     */
    public function getBoitier()
    {
        return $this->boitier;
    }

    /**
     * Get the value of processeur
     */
    public function getProcesseur()
    {
        return $this->processeur;
    }

    /**
     * Get the value of carteGraphique
     */
    public function getCarteGraphique()
    {
        return $this->carteGraphique;
    }

    /**
     * Get the value of utilisateur
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    //SETTERS

    /**
     * Set the value of idConfig
     *
     * @return  self
     */
    public function setIdConfig($idConfig)
    {
        $this->idConfig = $idConfig;

        return $this;
    }

    /**
     * Set the value of nomConfig
     *
     * @return  self
     */
    public function setNomConfig($nomConfig)
    {
        $this->nomConfig = $nomConfig;

        return $this;
    }

    /**
     * Set the value of carteMere
     *
     * @return  self
     */
    public function setCarteMere($carteMere)
    {
        $this->carteMere = $carteMere;

        return $this;
    }

    /**
     * Set the value of boitier
     *
     * @return  self
     */
    public function setBoitier($boitier)
    {
        $this->boitier = $boitier;

        return $this;
    }

    /**
     * Set the value of processeur
     *
     * @return  self
     */
    public function setProcesseur($processeur)
    {
        $this->processeur = $processeur;

        return $this;
    }

    /**
     * Set the value of carteGraphique
     *
     * @return  self
     */
    public function setCarteGraphique($carteGraphique)
    {
        $this->carteGraphique = $carteGraphique;

        return $this;
    }

    /**
     * Set the value of utilisateur
     *
     * @return  self
     */
    public function setUtilisateur($utilisateur)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }
}

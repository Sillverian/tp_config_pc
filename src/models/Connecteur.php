<?php

namespace TpConfigPc\models;

use TpConfigPc\dao\EntityInterface;

class Connecteur implements EntityInterface
{

    //PROPRIETES
    private ?int $idConnecteur = null;
    private string $nomConnecteur;

  
    //GETTERS

    /**
     * Get the value of idConnecteur
     */
    public function getIdConnecteur()
    {
        return $this->idConnecteur;
    }

    /**
     * Get the value of nomConnecteur
     */
    public function getNomConnecteur()
    {
        return $this->nomConnecteur;
    }

    //SETTERS

    /**
     * Set the value of idConnecteur
     *
     * @return  self
     */
    public function setIdConnecteur($idConnecteur)
    {
        $this->idConnecteur = $idConnecteur;

        return $this;
    }

    /**
     * Set the value of nomConnecteur
     *
     * @return  self
     */
    public function setNomConnecteur($nomConnecteur)
    {
        $this->nomConnecteur = $nomConnecteur;

        return $this;
    }
}

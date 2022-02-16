<?php

namespace TpConfigPc\models;

use TpConfigPc\dao\EntityInterface;

class CarteMereConnecteur implements EntityInterface
{
    //PROPRIETES
    private ?CarteMere $carteMere;
    private ?Connecteur $connecteur;
    private int $nombre;

   
    //GETTERS

    /**
     * Get the value of carteMere
     */
    public function getCarteMere()
    {
        return $this->carteMere;
    }

    /**
     * Get the value of connecteur
     */
    public function getConnecteur()
    {
        return $this->connecteur;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    //SETTERS

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
     * Set the value of connecteur
     *
     * @return  self
     */
    public function setConnecteur($connecteur)
    {
        $this->connecteur = $connecteur;

        return $this;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }
}

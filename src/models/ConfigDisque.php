<?php

namespace TpConfigPc\models;

use TpConfigPc\dao\EntityInterface;

class ConfigDisque implements EntityInterface
{
    //PROPRIETES
    private ?Configuration $configuration;
    private ?Disque $disque;
    private int $quantite;

   
    //GETTERS

    /**
     * Get the value of configuration
     */
    public function getConfiguration()
    {
        return $this->configuration;
    }

    /**
     * Get the value of disque
     */
    public function getDisque()
    {
        return $this->disque;
    }

    /**
     * Get the value of quantite
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    //SETTERS

    /**
     * Set the value of configuration
     *
     * @return  self
     */
    public function setConfiguration($configuration)
    {
        $this->configuration = $configuration;

        return $this;
    }

    /**
     * Set the value of disque
     *
     * @return  self
     */
    public function setDisque($disque)
    {
        $this->disque = $disque;

        return $this;
    }

    /**
     * Set the value of quantite
     *
     * @return  self
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }
}

<?php

namespace TpConfigPc\models;

use TpConfigPc\dao\EntityInterface;

class ConfigRAM implements EntityInterface
{
    //PROPRIETES
    private ?Configuration $configuration;
    private ?RAM $ram;
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
     * Get the value of Ram
     */
    public function getRam()
    {
        return $this->ram;
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
     * Set the value of Ram
     *
     * @return  self
     */
    public function setRam($ram)
    {
        $this->ram = $ram;

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

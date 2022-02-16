<?php

namespace TpConfigPc\models\types;

use TpConfigPc\dao\EntityInterface;

class TypeCarteMere implements EntityInterface
{

    // PROPRIETES
    private ?int $idCarteMere = null;
    private string $formatCarteMere;

    private array $compaTypeCarteGraphique = []; // Tableau compatibilité cartes graphiques
    private array $compaTypeDisque = []; // Tableau compatibilité disques
    private array $compaTypeProcesseur = []; // Tableau compatibilité processeurs
    private array $compaTypeRam = []; // Tableau compatibilité RAM

    
    

    // GETTERS

    /**
     * Get the value of idCarteMere
     */
    public function getIdCarteMere()
    {
        return $this->idCarteMere;
    }

    /**
     * Get the value of formatCarteMere
     */
    public function getFormatCarteMere()
    {
        return $this->formatCarteMere;
    }

    /**
     * Get the value of compaTypeCarteGraphique
     */
    public function fectchTypeCarteGraphique(): array
    {
        return $this->compaTypeCarteGraphique;
    }

    /**
     * Get the value of compaTypeDisque
     */
    public function fectchTypeDisque(): array
    {
        return $this->compaTypeDisque;
    }

    /**
     * Get the value of compaTypeProcesseur
     */
    public function fectchTypeProcesseur(): array
    {
        return $this->compaTypeProcesseur;
    }

    /**
     * Get the value of compaTypeRam
     */
    public function fectchTypeRAM(): array
    {
        return $this->compaTypeRam;
    }

    // SETTERS

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
     * Set the value of formatCarteMere
     *
     * @return  self
     */
    public function setFormatCarteMere($formatCarteMere)
    {
        $this->formatCarteMere = $formatCarteMere;

        return $this;
    }

    /**
     * Set the value of compaTypeCarteGraphique
     *
     * @return  self
     */
    public function setCompaTypeCarteGraphique($compaTypeCarteGraphique)
    {
        $this->compaTypeCarteGraphique = $compaTypeCarteGraphique;

        return $this;
    }

    /**
     * Set the value of compaTypeDisque
     *
     * @return  self
     */
    public function setCompaTypeDisque($compaTypeDisque)
    {
        $this->compaTypeDisque = $compaTypeDisque;

        return $this;
    }

    /**
     * Set the value of compaTypeProcesseur
     *
     * @return  self
     */
    public function setCompaTypeProcesseur($compaTypeProcesseur)
    {
        $this->compaTypeProcesseur = $compaTypeProcesseur;

        return $this;
    }

    /**
     * Set the value of compaTypeRam
     *
     * @return  self
     */
    public function setCompaTypeRam($compaTypeRam)
    {
        $this->compaTypeRam = $compaTypeRam;

        return $this;
    }
}

<?php

namespace TpConfigPc\models\types;

use TpConfigPc\dao\EntityInterface;

class TypeCarteGraphique implements EntityInterface
{

    // PROPRIETES
    private ?int $idTypeCarteGraphique = null;
    private string $modele;
    private string $constructeur;
    private int $tailleMemoireVive;

    

    // GETTERS

    /**
     * Get the value of idTypeCarteGraphique
     */
    public function getIdTypeCarteGraphique()
    {
        return $this->idTypeCarteGraphique;
    }

    /**
     * Get the value of modele
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * Get the value of constructeur
     */
    public function getConstructeur()
    {
        return $this->constructeur;
    }

    /**
     * Get the value of tailleMemoireVive
     */
    public function getTailleMemoireVive()
    {
        return $this->tailleMemoireVive;
    }
    // SETTERS

    /**
     * Set the value of idTypeCarteGraphique
     * @return  self
     */
    public function setIdTypeCarteGraphique($idTypeCarteGraphique)
    {
        $this->idTypeCarteGraphique = $idTypeCarteGraphique;
        return $this;
    }

    /**
     * Set the value of modele
     * @return  self
     */
    public function setModele($modele)
    {
        $this->modele = $modele;
        return $this;
    }

    /**
     * Set the value of constructeur
     * @return  self
     */
    public function setConstructeur($constructeur)
    {
        $this->constructeur = $constructeur;
        return $this;
    }

    /**
     * Set the value of tailleMemoireVive
     * @return  self
     */
    public function setTailleMemoireVive($tailleMemoireVive)
    {
        $this->tailleMemoireVive = $tailleMemoireVive;
        return $this;
    }
}

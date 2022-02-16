<?php

namespace TpConfigPc\models;

use TpConfigPc\dao\EntityInterface;

class Utilisateur implements EntityInterface
{
    // PROPRIETES
    private ?int $idUtilisateur = null;
    private string $nomUtilisateur;
    private string $motDePasseUtilisateur;

    // GETTERS

    /**
     * Get the value of idUtilisateur
     */
    public function getIdUtilisateur()
    {
        return $this->idUtilisateur;
    }

    /**
     * Get the value of nomUtilisateur
     */
    public function getNomUtilisateur()
    {
        return $this->nomUtilisateur;
    }

    /**
     * Get the value of motDePasseUtilisateur
     */
    public function getMotDePasseUtilisateur()
    {
        return $this->motDePasseUtilisateur;
    }

    // SETTERS

    /**
     * Set the value of idUtilisateur
     *
     * @return  self
     */
    public function setIdUtilisateur($idUtilisateur)
    {
        $this->idUtilisateur = $idUtilisateur;

        return $this;
    }

    /**
     * Set the value of nomUtilisateur
     *
     * @return  self
     */
    public function setNomUtilisateur($nomUtilisateur)
    {
        $this->nomUtilisateur = $nomUtilisateur;

        return $this;
    }

    /**
     * Set the value of motDePasseUtilisateur
     *
     * @return  self
     */
    public function setMotDePasseUtilisateur($motDePasseUtilisateur)
    {
        $this->motDePasseUtilisateur = $motDePasseUtilisateur;

        return $this;
    }
}

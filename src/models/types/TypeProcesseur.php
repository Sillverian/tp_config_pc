<?php

namespace TpConfigPc\models\types;

use TpConfigPc\dao\EntityInterface;

class TypeProcesseur implements EntityInterface
{

    // PROPRIETES
    private ?int $idTypeProcesseur = null;
    private string $constructeur;
    private string $socket;

    // GETTERS

    /**
     * Get the value of idTypeProcesseur
     */
    public function getIdTypeProcesseur()
    {
        return $this->idTypeProcesseur;
    }

    /**
     * Get the value of constructeur
     */
    public function getConstructeur()
    {
        return $this->constructeur;
    }

    /**
     * Get the value of socket
     */
    public function getSocket()
    {
        return $this->socket;
    }

    // SETTERS

    /**
     * Set the value of idTypeProcesseur
     * @return self
     */
    public function setIdTypeProcesseur($idTypeProcesseur)
    {
        $this->idTypeProcesseur = $idTypeProcesseur;
        return $this;
    }

    /**
     * Set the value of constructeur
     * @return self
     */
    public function setConstructeur($constructeur)
    {
        $this->constructeur = $constructeur;
        return $this;
    }

    /**
     * Set the value of socket
     * @return self
     */
    public function setSocket($socket)
    {
        $this->socket = $socket;
        return $this;
    }
}

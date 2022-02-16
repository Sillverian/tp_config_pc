<?php

namespace TpConfigPc\dao;

use TpConfigPc\dao\AbstractDAO;
use TpConfigPc\models\Utilisateur;
use \PDO;

class UtilisateurDAO extends AbstractDAO {

    public function __construct(PDO $pdo)
    {
        parent::__construct($pdo, "utilisateurs", Utilisateur::class); 
    }

}
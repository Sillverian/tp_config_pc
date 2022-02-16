<?php

namespace TpConfigPc\dao;

use TpConfigPc\dao\AbstractDAO;
use TpConfigPc\models\CarteMereConnecteur;
use \PDO;

class CarteMereConnecteurDAO extends AbstractDAO {

    public function __construct(PDO $pdo)
    {
        parent::__construct($pdo, "carte_mere_connecteurs", CarteMereConnecteur::class);  
    }

}
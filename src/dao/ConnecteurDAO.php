<?php

namespace TpConfigPc\dao;

use TpConfigPc\dao\AbstractDAO;
use TpConfigPc\models\Connecteur;
use \PDO;

class ConnecteurDAO extends AbstractDAO {

    public function __construct(PDO $pdo)
    {
        parent::__construct($pdo, "connecteurs", Connecteurs::class);  
    }

}
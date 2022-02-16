<?php

namespace TpConfigPc\dao;

use TpConfigPc\dao\AbstractDAO;
use TpConfigPc\models\Boitier;
use \PDO;

class BoitierDAO extends AbstractDAO {

    public function __construct(PDO $pdo)
    {
        parent::__construct($pdo, "boitiers", Boitier::class);  
    }

}
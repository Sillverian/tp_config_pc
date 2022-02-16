<?php

namespace TpConfigPc\dao;

use TpConfigPc\dao\AbstractDAO;
use TpConfigPc\models\types\TypeBoitier;
use \PDO;

class TypeBoitierDAO extends AbstractDAO {

    public function __construct(PDO $pdo)
    {
        parent::__construct($pdo, "type_boitiers", TypeBoitier::class);  
    }

}
<?php

namespace TpConfigPc\dao;

use TpConfigPc\dao\AbstractDAO;
use TpConfigPc\models\types\TypeCarteMere;
use \PDO;

class TypeCarteMereDAO extends AbstractDAO {

    public function __construct(PDO $pdo)
    {
        parent::__construct($pdo, "type_cartes_mere", TypeCarteMere::class);  
    }

}
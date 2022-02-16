<?php

namespace TpConfigPc\dao;

use TpConfigPc\dao\AbstractDAO;
use TpConfigPc\models\types\TypeProcesseur;
use \PDO;

class TypeProcesseurDAO extends AbstractDAO {

    public function __construct(PDO $pdo)
    {
        parent::__construct($pdo, "type_processeurs", TypeProcesseur::class);  
    }

}
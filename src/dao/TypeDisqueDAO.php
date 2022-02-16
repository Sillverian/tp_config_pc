<?php

namespace TpConfigPc\dao;

use TpConfigPc\dao\AbstractDAO;
use TpConfigPc\models\types\TypeDisque;
use \PDO;

class TypeDisqueDAO extends AbstractDAO {

    public function __construct(PDO $pdo)
    {
        parent::__construct($pdo, "type_disques", TypeDisque::class);  
    }

}
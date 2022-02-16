<?php

namespace TpConfigPc\dao;

use TpConfigPc\dao\AbstractDAO;
use TpConfigPc\models\types\TypeRAM;
use \PDO;

class TypeRAMDAO extends AbstractDAO {

    public function __construct(PDO $pdo)
    {
        parent::__construct($pdo, "type_RAM", TypeRAM::class);  
    }

}
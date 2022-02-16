<?php

namespace TpConfigPc\dao;

use TpConfigPc\dao\AbstractDAO;
use TpConfigPc\models\ConfigRAM;
use \PDO;

class ConfigRAMDAO extends AbstractDAO {

    public function __construct(PDO $pdo)
    {
        parent::__construct($pdo, "config_ram", ConfigRAM::class);  
    }

}
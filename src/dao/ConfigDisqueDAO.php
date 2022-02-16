<?php

namespace TpConfigPc\dao;

use TpConfigPc\dao\AbstractDAO;
use TpConfigPc\models\ConfigDisque;
use \PDO;

class ConfigDisqueDAO extends AbstractDAO
{

    public function __construct(PDO $pdo)
    {
        parent::__construct($pdo, "config_disque", ConfigDisque::class);
    }
}

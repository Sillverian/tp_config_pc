<?php

namespace TpConfigPc\dao;

use TpConfigPc\dao\AbstractDAO;
use TpConfigPc\models\types\TypeCarteGraphique;
use \PDO;

class TypeCarteGraphiqueDAO extends AbstractDAO {

    public function __construct(PDO $pdo)
    {
        parent::__construct($pdo, "type_cartes_graphiques", TypeCarteGraphique::class);  
    }

}
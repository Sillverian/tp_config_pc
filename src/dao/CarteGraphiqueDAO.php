<?php

namespace TpConfigPc\dao;

use TpConfigPc\dao\AbstractDAO;
use TpConfigPc\models\CarteGraphique;
use \PDO;

class CarteGraphiqueDAO extends AbstractDAO {

    public function __construct(PDO $pdo)
    {
        parent::__construct($pdo, "cartes_graphiques", CarteGraphique::class);  
    }

}
<?php
// Initialisation de la session
session_start();
session_regenerate_id(true);

// Bibliotheques utilisés
use DI\Bridge\Slim\Bridge;
use Slim\Views\Twig;
use TpConfigPc\controllers\ConnexionController;
use TpConfigPc\controllers\RouteController;
use TpConfigPc\controllers\InscriptionController;
use TpConfigPc\controllers\DeconnexionController;

// Permet le chargement des classes
require "../vendor/autoload.php";

// Connexion à la base de données
$dsn ="mysql:host=localhost;dbname=tp_config_pc;charset=utf8";
$user="root";
$pass="";

$pdo = new PDO($dsn,$user,$pass);

// Instantiation de l'application
$builder = new DI\ContainerBuilder();
$container = $builder->build();

// Definition des twig au sein du container
$container->set('twig', function(){
    return Twig::create("../views");
});

// Definition de la connexion à la BDD au sein du container
$container->set('pdo', function() use ($pdo){
    return $pdo;
});

$app = Bridge::create($container);

// Table de routage
$app->get("[/]", [RouteController::class, "home"]); // Page d'accueil de l'application

$app->get("/inscription", [RouteController::class, "inscription"]); // Page d'inscription
$app->post("/inscription", [InscriptionController::class, "inscription"]); // Traitement formulaire d'inscription

$app->get("/connexion", [RouteController::class, "connexion"]); // Page de conenxion
$app->post("/connexion", [ConnexionController::class, "connexion"]); // Traitement de la connexion

$app->get("/deconnexion", [DeconnexionController::class, "deconnexion"]); // Deconnexion

// Lance l'application
$app->run();
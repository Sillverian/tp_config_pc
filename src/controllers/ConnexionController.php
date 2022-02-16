<?php

namespace TpConfigPc\controllers;

use DI\Container;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use TpConfigPc\dao\UtilisateurDAO;

class ConnexionController extends AbstractWebController
{

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function connexion(ResponseInterface $response, ServerRequestInterface $request)
    {
        // Recuperation des infos dans le formaulaire de connexion
        $data = $request->getParsedBody();

        $utiliDAO = new UtilisateurDAO($this->getPDO());

        // equivalent à un SELECT avec une clause WHERE
        $findUser = $utiliDAO->find(['nom_utilisateur' => $data["nom_utilisateur"], 'mot_de_passe_utilisateur' => $data["mot_de_passe_utilisateur"]])->getAllAsObject();

        // si l'utilisateur existe
        if ($findUser) {
            // Creation de la session
            $_SESSION['user'] = $data["nom_utilisateur"];

            // Redirection vers la page d'accueil
            return $this->render($response, "home_view.html.twig");
        } else  
        {
            $error = "Les informations de connexion sont incorrectes";

            // Redirection vers la page de connexion avec l'erreur
            return $this->render($response, "connexion_view.html.twig", ["error" => $error]);
        }


        $response->getBody()->write("");

        return $response;
    }
}

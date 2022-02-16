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

        $data = $request->getParsedBody();

        //var_dump($data);

        $utiliDAO = new UtilisateurDAO($this->getPDO());

        $findUser = $utiliDAO->find(['nom_utilisateur' => $data["nom_utilisateur"], 'mot_de_passe_utilisateur' => $data["mot_de_passe_utilisateur"]])->getAllAsObject();

        if ($findUser) 
        {
            $_SESSION['user'] = $data["nom_utilisateur"];

            return $this->render($response, "home_view.html.twig", ["name" => $_SESSION['user']]);           
        } else 
        {
            $error = "Les informations de connexion sont incorrectes";

            return $this->render($response, "connexion_view.html.twig", ["error" => $error]);
        }


        $response->getBody()->write("");

        return $response;
    }
}

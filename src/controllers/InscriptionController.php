<?php

namespace TpConfigPc\controllers;

use DI\Container;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use TpConfigPc\dao\UtilisateurDAO;
use TpConfigPc\models\Utilisateur;

class InscriptionController extends AbstractWebController
{

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function inscription(ResponseInterface $response, ServerRequestInterface $request)
    {

        // Recuperation des données
        $data = $request->getParsedBody();

        //var_dump($data);

        // Verification si le mot de passe et la confirmation de celui-ci sont identiques
        if (!empty($data["password"]) && !empty($data["password_confirm"])) {
            if ($data["password"] == $data["password_confirm"]) {

                // Création de l'utilisateur
                $utilisateur = new Utilisateur;
                $utilisateur->setNomUtilisateur($data["user_name"]);
                $utilisateur->setMotDePasseUtilisateur($data["password"]);

                //var_dump($utilisateur);

                // Insertion de l'utilisateur dans la BDD
                $utiliDAO = new UtilisateurDAO($this->getPDO());

                $utiliDAO->save($utilisateur);
            }
        } else {
            $error = "Les mots de passe ne sont pas identiques";

            return $this->render($response, "inscription_view.html.twig", ["error" => $error]);
        }
        //var_dump($data);

        return $response->withStatus(302)->withHeader("location", "/");
    }
}

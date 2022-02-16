<?php

namespace TpConfigPc\controllers;

use DI\Container;
use Psr\Http\Message\ResponseInterface;

class DeconnexionController extends AbstractWebController{
    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function deconnexion(ResponseInterface $response){

        // Destruction de la session
        session_destroy();

        session_start();
        session_regenerate_id();

        return $response->withStatus(302)->withHeader("location", "/");
    }
}
<?php

namespace TpConfigPc\controllers;

use Psr\Http\Message\ResponseInterface;
use DI\Container;

class RouteController extends AbstractWebController {

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function home(ResponseInterface $response)
    {
        /*
        if (isset($_SESSION['user'])){
            $name = $_SESSION['user'];
        }
        */

        return $this->render($response, "home_view.html.twig");
    }

    public function inscription(ResponseInterface $response)
    {
        return $this->render($response, "inscription_view.html.twig");
    }

    public function connexion(ResponseInterface $response)
    {
        return $this->render($response, "connexion_view.html.twig");
    }
}
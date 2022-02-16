<?php

namespace TpConfigPc\controllers;

use DI\Container;
use Psr\Http\Message\ResponseInterface;

abstract class AbstractWebController
{
    protected Container $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function render(ResponseInterface $response, string $template, array $params = [])
    {
        $params['session'] = $_SESSION;

        return $this->container->get('twig')->render($response,$template,$params);
    }

    public function getPDO(){
        return $this->container->get('pdo');
    }
}

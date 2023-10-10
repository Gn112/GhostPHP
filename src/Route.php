<?php

namespace src;

use GHOST\Init\Bootstrap;
class Route extends Bootstrap {

    // Lista com todas as rotas
    protected function initRoutes()
    {
        $routes['home'] = array
        (
            'route' => '/',
            'controller' => 'indexController',
            'action' => 'index'
        );

        $routes['sobre_nos'] = array
        (
            'route' => '/sobre_nos',
            'controller' => 'indexController',
            'action' => 'sobreNos'
        );

        $this->setRoutes($routes);
    }

}

?>
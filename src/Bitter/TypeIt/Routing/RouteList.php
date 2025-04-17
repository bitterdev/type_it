<?php

namespace Bitter\TypeIt\Routing;

use Bitter\TypeIt\API\V1\Middleware\FractalNegotiatorMiddleware;
use Bitter\TypeIt\API\V1\Configurator;
use Concrete\Core\Routing\RouteListInterface;
use Concrete\Core\Routing\Router;

class RouteList implements RouteListInterface
{
    public function loadRoutes(Router $router)
    {
        $router
            ->buildGroup()
            ->setNamespace('Concrete\Package\TypeIt\Controller\Dialog\Support')
            ->setPrefix('/ccm/system/dialogs/type_it')
            ->routes('dialogs/support.php', 'type_it');
    }
}
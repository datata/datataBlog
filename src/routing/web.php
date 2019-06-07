<?php
namespace App\routing;
use FastRoute\Dispatcher;

class web
{
    public static function getDispatcher(): Dispatcher
    {
    return \FastRoute\simpleDispatcher(
        function (\FastRoute\RouteCollector $route){
            $route->addRoute('GET','/',['App\controllers\HomeController',"index"]);
            $route->addRoute('GET','/who',['App\controllers\WhoController',"index"]);

            $route->addRoute('GET','/register',['App\controllers\RegisterController',"index"]);
            $route->addRoute('POST','/register',['App\controllers\RegisterController',"register"]);

            $route->addRoute('GET','/login',['App\controllers\LoginController',"index"]);

        }
    );
    }
} 
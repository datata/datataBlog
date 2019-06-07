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
            //register
            $route->addRoute('GET','/register',['App\controllers\auth\RegisterController',"index"]);
            $route->addRoute('POST','/register',['App\controllers\auth\RegisterController',"register"]);
            //login
            $route->addRoute('GET','/login',['App\controllers\auth\LoginController',"index"]);
            $route->addRoute('POST','/login',['App\controllers\auth\LoginController',"login"]);
            //dashBoard
            $route->addRoute('GET','/dashboard',['App\controllers\auth\DashBoardController',"index"]);
            //logout
            $route->addRoute('GET','/logout',['App\controllers\auth\LogoutController',"index"]);


        }
    );
    }
} 
<?php
namespace App;

use DI\Container;
use Kint;

class RouterManager
{
    private $container;
    
    public function __construct(Container $container){
        $this->container=$container;
    }

    public function dispatch(string $requestMethod, string $requestUri,\FastRoute\Dispatcher $dispatcher)
    {
  
        $route = $dispatcher -> dispatch($requestMethod, $requestUri);
        //var_dump($route);
        switch($route[0])
        {
            case \FastRoute\Dispatcher::NOT_FOUND:
                header("HTTP/1.0 404 Not Found");
                $viewManager = new ViewManager();
                $viewManager->renderTemplate("notFound.view.html");
            break;

            case \FastRoute\Dispatcher::FOUND:
            
                $controller =$route[1];
                $method= $route[2];
                $this->container->call($controller, $method);
                break;
                
            case \FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
                header("HTTP/1.0 405 Method Not Allowed");
                echo "<h1>METHOD NOT ALLOWED</h1>";
            break;
        }
    }
}
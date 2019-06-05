<?php
namespace App;

use App\routing\web;

use DI\ContainerBuilder;
use DI\Container;

class kernel
{
    private $container;
    private $logger;

    public function __construct()
    {
        //echo "<h1>HOLA MUNDO</h1>";
        $this->container = $this->createContainer();
        $this->logger = $this->container->get(LogManager::class);
    }

   public function init()
    {      
        $this->logger->info("Arrancando la aplicación");
        $httpMethod =$_SERVER['REQUEST_METHOD'];
        $uri =parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $web= new Web();
        $route =$this->container->get(RouterManager::class);
        $route->dispatch($httpMethod, $uri, web::getDispatcher());
        //$routerManager = new RouterManager();
        //$routerManager->dispatch($httpMethod, $uri, $web::getDispatcher());       
    }

    //creamos el contenedor y que usamos el Autowiring
    public function createContainer():Container 
    {
        $containerBuilder = new ContainerBuilder();
        $containerBuilder->useAutowiring(true);
        return $containerBuilder->build();
    }

}
    

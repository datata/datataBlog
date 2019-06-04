<?php
namespace App;
class kernel
{
    public function __construct(){
        //echo "<h1>HOLA MUNDO</h1>";

        $logManager = new LogManager();
        $logManager->info("Arrancando la aplicación");

        $viewManager = new ViewManager();
        $viewManager->renderTemplate("index.view.html");
    }
}
<?php
namespace App\controllers;

class HomeController extends Controller
{

   public function index()
   {
      // $viewManager = $this->container->get(ViewManager::class);

      $this ->viewManager->renderTemplate("index.view.html");
   }
  

}
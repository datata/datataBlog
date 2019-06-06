<?php
namespace App\controllers;

use App\DoctrineManager;

use App\models\entities\User;

use Kint;

class HomeController extends Controller
{

   public function index(DoctrineManager $doctrine)
   {
      // $viewManager = $this->container->get(ViewManager::class);
      $user = $doctrine->em->getRepository(User::class)->find(70);
      Kint::dump($user);
      $this ->viewManager->renderTemplate("index.view.html");
   }
  

}
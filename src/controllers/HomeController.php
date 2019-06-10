<?php
namespace App\controllers;

use App\DoctrineManager;

use App\models\entities\Post;

use Kint;

class HomeController extends Controller
{

   public function index()
   {
      // $doctrineManager = $this->container->get(DoctrineManager::class);
      // $repository = $doctrineManager->em->getRepository(Post::class);

      $doctrineManager = $this->container->get(DoctrineManager::class);
      $repository = $doctrineManager->em->getRepository(Post::class);
      //Kint::dump($repository);
      $posts=$repository->findAll();
      Kint::dump($posts);
      
      //$viewManager = $this->container->get(ViewManager::class);
      //$user = $doctrine->em->getRepository(User::class)->find(2);
      $this ->viewManager->renderTemplate("index.view.html",['posts'=>$posts]);
   }  

}
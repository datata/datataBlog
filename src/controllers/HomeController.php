<?php
namespace App\controllers;

use App\services\PostsService;
use App\models\entities\Post;


use Kint;

class HomeController extends ControllerAuth
{

   public function index()
   {

      $PostsService = $this->container->get(PostsService::class);
      $posts = $PostsService->getPosts();
      //Kint::dump($posts);

      //$user = $this->sessionManager->get('user');

      $this->viewManager->renderTemplate("index.view.html",['posts'=>$posts, 'user'=> (! $this->user)?null: $this->user->email]);
   }  

}
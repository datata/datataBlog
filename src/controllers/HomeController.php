<?php
namespace App\controllers;

use App\services\PostsService;
use App\models\entities\Post;

use Kint;

class HomeController extends Controller
{

   public function index()
   {

      $PostsService = $this->container->get(PostsService::class);

      $PostsService->getPosts();

      $this ->viewManager->renderTemplate("index.view.html");
   }  

}
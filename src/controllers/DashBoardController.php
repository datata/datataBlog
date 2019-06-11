<?php
namespace App\controllers;
use App\services\UsersService;
use App\services\PostsService;

use Kint;


class DashBoardController extends ControllerAuth
{
    public function index()
    {       

        $PostsService = $this->container->get(PostsService::class);
    
        $posts=$PostsService->getPostsById($this->user->id);
       
        $this->viewManager->renderTemplate('dashboard.view.html',['user'=>$this->user->email,'posts'=>$posts]);
    }

}
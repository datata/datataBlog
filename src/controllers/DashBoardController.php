<?php
namespace App\controllers;
use App\services\UsersService;
use App\services\PostsService;

use Kint;


class DashBoardController extends Controller
{
    public function index()
    {
        $UsersService = $this->container->get(UsersService::class);

        $PostsService = $this->container->get(PostsService::class);
        
        $id=$this->sessionManager->get('user');

        $posts=$PostsService->getPostsById($id);
        Kint::dump($posts);

        $user=$UsersService->getUserById($id);
        Kint::dump($user);
        
        
        if(!$user) return $this->redirectTo('login');
        $this->viewManager->renderTemplate('dashboard.view.html',['user'=>$user->email,'post'=>$posts]);
    }

}
<?php 
namespace App\controllers;

use App\Services\UsersService;

class PostController extends ControllerAuth
{
    public function index()
    {
       $this ->viewManager->renderTemplate('form-post.view.html',['user'=>$this->user->email]);
    }  

}
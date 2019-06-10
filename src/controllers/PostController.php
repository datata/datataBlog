<?php 
namespace App\controllers;

class PostController extends Controller
{

    public function index()
    {
       
       $this ->viewManager->renderTemplate('form-post.view.html');
    }  
 


}
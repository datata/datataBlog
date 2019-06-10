<?php 
namespace App\controllers;

use App\services\UsersService;
use App\services\PostsService;

use App\DoctrineManager;

use App\models\entities\Post;

use Kint;

class PostController extends ControllerAuth
{
    public function index()
    {
       $this ->viewManager->renderTemplate('form-post.view.html',['user'=>$this->user->email]);
    }  

    public function create(DoctrineManager $doctrine)
    {
       $title = $_POST['title'];
       $body = $_POST['body'];
       $idUser = $this->user->id;

       $post = new Post();

       $post->title =$title;
       $post->body =$body;
       $post->idUser =$idUser;
       //Kint::dump($user);

       //almacenamos en base de datos
       $doctrine->em->persist($post);
       $doctrine->em->flush();

        $this->redirectTo('dashboard');

    } 

    public function delete($id){

        $postService = $this->container->get(PostsService::class);
       
        try{

        $postService->deletePostUserById($this->user->id,$id);
        }catch(Exception $e)
        {
            $this->Logger->error($e->getMessage());
        }
        $this->redirectTo('dashboard');
    }

    

    



}
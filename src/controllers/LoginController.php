<?php
namespace App\controllers;

use App\DoctrineManager;

use App\models\entities\User;

use Kint;

class LoginController extends Controller 
{
    private $error;

   public function index(){

       $this->error = null;
       $this->viewManager->renderTemplate("login.view.html");
   }

   public function login(DoctrineManager $doctrine)
   {
        //echo "Pulsado login";
        $email = $_POST['email'];
        $password = $_POST['passwd'];
        //

        $repository=$doctrine->em->getRepository(User::class);
        //finOneBy+el campo q ha de buscar
        //Kint::dump($user->findOneByEmail("datata"));

        $user = $repository->findOneByEmail($email);

        //comprobacion si user existe
        if(!$user)
        {
         $this->error = "El usuario no existe";
         return $this->viewManager->renderTemplate("login.view.html",['error'=>$this->error]);
        
        } 
        //Kint::dump(sha1($password),$user->password);

        //comprobacion si passwd existe
        if($user->password !== sha1($password)) 
        {
        $this->error = "El usuario o password es incorrecto";
        return $this->viewManager->renderTemplate("login.view.html",['error'=>$this->error]);
        }

        $this->redirectTo('');

    
   }


}
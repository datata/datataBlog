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
        $passwd = $_POST['passwd'];
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
        

      
    //    $name=$_POST['name'];
    //    $email=$_POST['email'];
    //    $passwd=$_POST['passwd'];
    //    //Kint::dump($doctrine);
       
    //    //Kint::dump($user);

    //    $user = new User();

    //    $user->name =$name;
    //    $user->email =$email;
    //    $user->password =sha1($password);
    //    //Kint::dump($user);

    //    //almacenamos en base de datos
    //     $doctrine->em->persist($user);
    //     $doctrine->em->flush();

   }


}
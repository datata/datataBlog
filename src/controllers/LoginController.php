<?php
namespace App\controllers;

use App\DoctrineManager;

use App\models\entities\User;

use Kint;

class LoginController extends Controller {


   public function index(){

       $this->viewManager->renderTemplate("login.view.html");
   }

   public function login(DoctrineManager $doctrine)
   {
      
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
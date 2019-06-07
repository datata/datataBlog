<?php
namespace App\controllers;


class DashBoardController extends Controller
{
    public function index()
    {
        $user = $this->sessionManager->get('user');
        $this->viewManager->renderTemplate('dashboard.view.html',['user'=>$user]);
    }

}
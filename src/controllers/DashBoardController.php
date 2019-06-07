<?php
namespace App\controllers;


class DashBoardController extends Controller
{
    public function index()
    {
        $this->viewManager->renderTemplate("dashboard.view.html");
    }

}
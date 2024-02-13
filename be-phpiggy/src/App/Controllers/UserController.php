<?php
declare(strict_types=1);

namespace App\Controllers;

class UserController extends Controller
{
    public function registerView()
    {
        echo $this->view->render('register.php', ['title' => "User Register"]);
    }

    public function register()
    {
        dd($_POST);
    }
}
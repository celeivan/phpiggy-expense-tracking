<?php
declare(strict_types=1);

namespace App\Controllers;

class UserController extends Controller
{
    public function register()
    {
        echo $this->view->render('register.php', ['title' => "User Register"]);
    }
}
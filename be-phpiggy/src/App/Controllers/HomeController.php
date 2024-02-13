<?php
declare(strict_types=1);

namespace App\Controllers;

class HomeController extends Controller
{
    public function home()
    {
        echo $this->view->render('index.php');
    }
}
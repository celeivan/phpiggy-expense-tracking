<?php
declare(strict_types=1);

namespace App\Controllers;

class AboutController extends Controller
{
    public function about()
    {
        echo $this->view->render('about.php', ['title' => "About Page"]);
    }
}
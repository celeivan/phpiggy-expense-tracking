<?php
declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;
use App\Services\ValidatorService;

class UserController extends Controller
{

    public function __construct(TemplateEngine $view, private ValidatorService $validatorService)
    {
        parent::__construct($view);
    }

    public function registerView()
    {
        echo $this->view->render('register.php', ['title' => "User Register"]);
    }

    public function register()
    {
        $this->validatorService->validateRegister($_POST);
        // dd($_POST);
    }
}
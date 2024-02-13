<?php

declare(strict_types=1);

namespace App\Config;

use App\Controllers\HomeController;
use App\Controllers\AboutController;
use App\Controllers\UserController;
use Framework\App;

function registerRoutes(App $app)
{
    $app->get('/', [HomeController::class, 'home']);
    $app->get('/about', [AboutController::class, 'about']);
    $app->get('/register', [UserController::class, 'registerView']); //Tutorial called this AuthController, I prefer User for fun :) 
    $app->post('/register', [UserController::class, 'register']); //Tutorial called this AuthController, I prefer User for fun :) 
}
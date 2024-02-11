<?php
declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;
use App\Config\Paths;

class Controller
{
    protected TemplateEngine $view;

    public function __construct()
    {
        $this->view = new TemplateEngine(Paths::VIEWS);
    }
}
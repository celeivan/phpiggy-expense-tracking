<?php
declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;
use App\Config\Paths;

class Controller
{
    public function __construct(protected TemplateEngine $view)
    {
    }
}
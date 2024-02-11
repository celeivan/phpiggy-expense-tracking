<?php
// Load and conf the app/framework

declare(strict_types=1);

require __DIR__."/../../vendor/autoload.php";

use Framework\App;

$app = new App();

$app->get('/');

return $app;
<?php

use App\View\Main;

use Dotenv\Dotenv;

require_once __DIR__ . '/../../vendor/autoload.php';
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();




// Lancer le programme
Main::run();

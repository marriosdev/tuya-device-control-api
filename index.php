<?php

require 'vendor/autoload.php';

use App\Controllers\LightBulbController;
use MareaTurbo\Router;

// INIT ENV 
(Dotenv\Dotenv::createImmutable(__DIR__))->load();

(new Router())->controllers([
	LightBulbController::class
]);
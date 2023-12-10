<?php

require_once __DIR__ . "/../includes/app.php";

use Controllers\Logincontroller;
use MVC\Router;

$routes = new Router();

$routes->get("/login",[Logincontroller::class,"login"]);
$routes->post("/login",[Logincontroller::class,"login"]);
$routes->get("/join",[Logincontroller::class,"join"]);
$routes->post("/login",[Logincontroller::class,"join"]);


$routes->validateRoutes();
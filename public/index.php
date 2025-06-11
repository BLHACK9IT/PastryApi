<?php
require_once __DIR__ . '/../config/bootstrap.php';

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *"); // Allow Expo app to connect
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

$router = new Router();
require '../config/routes.php';
$router->dispatch();

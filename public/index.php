<?php 


include '../Core/Routeur.php';
include '../Controllers/Controller.php';
// include '../Controllers/HomeController.php';
// include '../Controllers/CreationController.php';
// include '../Controllers/UserController.php';

$route = new Routeur();

$route->routes();


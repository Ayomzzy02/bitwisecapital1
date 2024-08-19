<?php
require './router/Router.php';
require './controllers/HomeController.php';
require './controllers/AuthController.php';
require './controllers/dashboardController.php';
require './controllers/verifyEmailController.php';

$router = new Router();

// Define routes
$router->add('/bitwise', [new HomeController(), 'index']);
$router->add('/bitwise/Signup', [new SignupController(), 'index']);
$router->add('/bitwise/login', [new LoginController(), 'index']);
$router->add('/bitwise/auth/verifyEmail/:emailVerificationToken', [new verifyEmailController(), 'verifyEmail']);
$router->add('/bitwise/dashboard', [new dashboardController(), 'index']);
$router->add('/bitwise/dashboard/deposit', [new dashboardController(), 'deposit']);
$router->add('/bitwise/dashboard/withdraw', [new dashboardController(), 'withdraw']);


// Dispatch the request
$router->dispatch();

?>
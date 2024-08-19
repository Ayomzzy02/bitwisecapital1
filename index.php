<?php
require './router/Router.php';
require './controllers/HomeController.php';
require './controllers/AuthController.php';
require './controllers/dashboardController.php';
require './controllers/verifyEmailController.php';

$router = new Router();

// Define routes
$router->add('/Cryptoback2', [new HomeController(), 'index']);
$router->add('/Cryptoback2/Signup', [new SignupController(), 'index']);
$router->add('/Cryptoback2/login', [new LoginController(), 'index']);
$router->add('/Cryptoback2/auth/verifyEmail/:emailVerificationToken', [new verifyEmailController(), 'verifyEmail']);
$router->add('/Cryptoback2/dashboard', [new dashboardController(), 'index']);
$router->add('/Cryptoback2/dashboard/deposit', [new dashboardController(), 'deposit']);
$router->add('/Cryptoback2/dashboard/withdraw', [new dashboardController(), 'withdraw']);


// Dispatch the request
$router->dispatch();

?>
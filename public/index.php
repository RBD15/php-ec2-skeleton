<?php
use Error;
use App\Routes\WebRoutes;
use Slim\Factory\AppFactory;
use Selective\BasePath\BasePathMiddleware;

require __DIR__ . '/../vendor/autoload.php';

error_reporting(E_ALL);

try {
  // Instantiate App
  $app = AppFactory::create();
  
  //Check base path in server
  $app->add(new BasePathMiddleware($app));
  
  // Add error middleware
  $app->addErrorMiddleware(true, true, true);
  // Add routes
  WebRoutes::add($app);
  
  $app->run();
} catch (Error $e) {
  echo $e->getMessage();
}
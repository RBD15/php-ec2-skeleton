<?php 
namespace App\Routes;

use Slim\Psr7\Request;
use Slim\Psr7\Response;
use App\Controllers\BaseController;

final class WebRoutes
{

  public static function add($app): void
  {
    $app->get('/', function (Request $request, Response $response) {
      $controller = new BaseController();
      return $controller->index($request,$response);
  });
  
    $app->get('/sys/check-status', function (Request $request, Response $response, $args) {
      $data = [
        "error"=>false,
        "message"=>"Ejele"
      ];
      $dataJson = json_encode($data);
      $response->getBody()->write($dataJson);
      $response = $response->withAddedHeader('Content-Type','application/json')->withStatus(200);
      return $response;
    });
  }
  
}


?>
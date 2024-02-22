<?php 
namespace App\Controllers;

use Slim\Psr7\Request;
use Slim\Psr7\Response;
use App\Controllers\Controller;

final class BaseController extends Controller
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index(Request $request, Response $response)
  {
    return $this->renderer->render($response,'/Pages/Main.php',[]);
  }

  public function test($message): String
  {
    return $message;
  }
}


?>
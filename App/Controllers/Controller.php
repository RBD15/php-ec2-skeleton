<?php 
namespace App\Controllers;

use Slim\Views\PhpRenderer;

class Controller
{
  protected PhpRenderer $renderer;
  public function __construct()
  {
    $this->renderer = new PhpRenderer(__DIR__.'/../Views');
  }
  
}


?>
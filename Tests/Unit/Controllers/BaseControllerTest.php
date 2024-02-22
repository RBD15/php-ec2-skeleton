<?php

use App\Controllers\BaseController;
use PHPUnit\Framework\TestCase;

final class BaseControllerTest extends TestCase
{
  protected function setUp(): void
  {
    
  }


  public function test_response(): void
  {
    $message = 'Hola';
    $sut = new BaseController();
    $result = $sut->test($message);
    $this->assertEquals('Hola',$result);
  }

  protected function tearDown(): void
  {
  }

}


?>
<?php
use PHPUnit\Framework\TestCase;
class MyDataControllertest extends TestCase
{

  public function testFetchDataReturnsCorrectData()
  {
      $controller = new App\MyDataController;
      $output = json_decode($controller->fetchData(), true);
      $expectedData = [
        ['foo', 'bar'],  
        ['1', '2'],
        ['3', '4']
          
      ];
      $this->assertEquals($expectedData, $output);
  }
  public function testFetchDataReturnsJson()
      {
          $controller = new App\MyDataController;
  
          // Capture the output of the fetchData() method
          $output = $controller->fetchData();
  
          // Ensure that the method returns valid JSON
          $this->assertJson($output);
      }

     

  }
  
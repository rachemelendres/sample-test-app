<?php
use PHPUnit\Framework\TestCase;
class MyDataControllertest extends TestCase
{
  public function testFetchDataReturnsJson()
      {
          $controller = new App\MyDataController;
  
          // Capture the output of the fetchData() method
          $output = $controller->fetchData();
  
          // Ensure that the method returns valid JSON
          $this->assertJson($output);
      }
  }
  

    // public function testFetchDataReturnsArray(){
    //     $controller = new App\Controller\MyDataController;

    //     // Capture the output of the fetchData() method
    //     ob_start();
    //     $controller->fetchData();
    //     $output = ob_get_clean();

    //     // Ensure that the data is an array
    //     $data = json_decode($output, true);
    //     $this->assertIsArray($data);
    // }

    // public function testFetchDataReturnsCorrectNumberOfRows(){
    //     $controller = new Src\Controller\MyDataController;

    //     // Capture the output of the fetchData() method
    //     ob_start();
    //     $controller->fetchData();
    //     $output = ob_get_clean();

    //     $data = json_decode($output, true);

    //     // check if the number of rows is the same as the csv file
    //     $file = fopen("../data/app-data.csv", "r");
    //     $count = 0;
    //     while(!feof($file)){
    //         $line = fgets($file);
    //         $count += substr_count($line, PHP_EOL);
    //     }
    //     fclose($file);
    //     $this->assertCount($count, $data);
    // }

    // public function testFetchDataReturnsCorrectData(){
    //     $controller = new Src\Controller\MyDataController;

    //     // Capture the output of the fetchData() method
    //     ob_start();
    //     $controller->fetchData();
    //     $output = ob_get_clean();

    //     $data = json_decode($output, true);

    //     // check if the returned data matches the csv file
    //     $file = fopen("../data/app-data.csv", "r");
    //     $i = 0;
    //     while (($line = fgetcsv($file)) !== false) {
    //         $this->assertSame($line, $data[$i]);
    //         $i++;
    //     }
    //     fclose($file);
    // }


<?php

namespace App;

class MyDataController {
  public function fetchData() {
      // Open the CSV file
      $filePath = __DIR__."/../data/app-data.csv";

      $file = fopen($filePath, "r");

      // Initialize an empty array to store the data
      $data = array();

      // Iterate over each line in the file
      while (($line = fgetcsv($file)) !== false) {
          // Add the line of data to the array
          $data[] = $line;
      }

      // Close the file
      fclose($file);

      // Return the data as JSON
      // header('Content-Type: application/json');
      echo json_encode($data);
      return json_encode($data);
  }
}
$controller = new MyDataController();
$controller->fetchData();

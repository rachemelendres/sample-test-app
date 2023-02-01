# PHP Application

[![codecov](https://codecov.io/gh/rachemelendres/sample-test-app/branch/master/graph/badge.svg?token=I1DWJK2P31)](https://codecov.io/gh/rachemelendres/sample-test-app)

This application is a simple PHP script that retrieves data from a CSV file and returns it as a JSON object. The data is stored in the "data" folder and the file name is "app-data.csv".

## Installation
1. Clone the repository to your local machine.
2. Make sure you have PHP installed on your machine.
3. Start your server, for example, using the command php -S localhost:8000
4. Open your browser and navigate to http://localhost:8000

## Usage
The script has a single class, MyDataController, which has a single method, fetchData(). When the method is called, it opens the CSV file, reads the data, and returns it as a JSON object.

You can call the fetchData() method from anywhere in your code to retrieve the data from the CSV file.
```
$controller = new MyDataController();
$data = $controller->fetchData();
```
## Note
The data in the CSV file must be formatted in the following way:

Each line represents a single record.
Each field within a record must be separated by a comma.

## File structure
```
- data/
    - app-data.csv
- src/
    - MyDataController.php
- index.php
- fetch.js
```

## Testing

The application has been tested using PHPUnit and Mocha / Chai.

PHPUnit tests are located in the tests directory and can be run by executing the command phpunit in the root directory of the project. These tests ensure that the application's controllers and models are working as expected.

Mocha and Chai tests are also located in the test directory and can be run by executing the command npx in the root directory of the project. These tests ensure that the application's front-end code, specifically the fetching of data from the back-end, is working as expected.

## How to run the tests

To run the PHPUnit tests, you need to have phpunit installed, you can install it by running composer require --dev phpunit/phpunit in the root directory of the project then run phpunit command.

To run Chai tests, you need to have Mocha and Chai installed, you can install it by running npm install mocha chai in the root directory of the project then run npx command.

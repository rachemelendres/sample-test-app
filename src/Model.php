<?php

class MyModel
{
    public static function getDataFromCSV($param)
    {
        $csv_path = 'path/to/csv/file.csv';
        $file = fopen($csv_path, 'r');
        while (($line = fgetcsv($file)) !== FALSE) {
            if($line[0] == $param) {
                fclose($file);
                return $line[1];
            }
        }
        fclose($file);
        return '';
    }
}
<?php
require_once 'XMLFileReader.class.php';
require_once 'CSVFileReader.class.php';

$CSV_file_reader = new CSVFileReader("Music.csv");
var_dump($CSV_file_reader);
?>

<?php

$csv  = array();
$file = './csv/news_data.csv';
$fp   = fopen($file, "r");

while (($data = fgetcsv($fp, 0, ",")) !== false) {
    $csv[] = $data;
}
fclose($fp);

require_once "./tpl/home.php";

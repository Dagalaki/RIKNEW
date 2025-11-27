<?php
$o = file_get_contents('http://rik.smart-tv-data.com/json/menu.json');
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
echo $o;

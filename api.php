<?php 
// header('Content-type: application/json');


$json_string = file_get_contents('albums.json');

$albumArray = json_decode($json_string, true);

// var_dump($albumArray);

?>
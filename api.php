<?php 


//decode from json to php
$array_from_json = file_get_contents('albums.json');
$albumArray = json_decode($array_from_json, true);

//now back to json
$json_string = json_encode($array_from_json);

echo($json_string);

header('Content-type: application/json');



?>
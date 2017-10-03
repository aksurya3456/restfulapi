<?php
header("Content-Type: application/json; charset=UTF-8");

$request = json_decode(file_get_contents('php://input'), true);

//$request = json_decode($_POST,true);

$response = Array();
$response["http_code"] = 200;
$response["message"] = Array();
$response["message"]["key"]=$request["key"];
$response["message"]["key2"]=$request["key2"];

echo json_encode($response);

?>

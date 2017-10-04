<?php

header("Content-type: application/json; charset=UTF-8");

$response = Array();
// $response["message"] = Array();
$request = json_decode(file_get_contents('php://input'),true);

if($_SERVER['REQUEST_METHOD']=="POST")
{
	if($request['mobile'] == "7736156660")
	{
		$response["http_code"] = 200;
		$response["message"] = "OTP Sent Successfully";
	}
	else if($request['mobile'] == null)
	{
		$response["http_code"] = 400;
		$response["message"] = "User Id Missing";
	}
	else 
	{
		$response["http_code"] = 404;
		$response["message"] = "No Shipment found for the user";
	}
	


}
else
{
	$response["http_code"] = 405;
	$response["message"] = "Only POST request allowed";


}

echo json_encode($response);

?>

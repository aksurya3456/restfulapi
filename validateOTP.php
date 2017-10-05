<?php

header("Content-type: application/json; charset=UTF-8");

$response = Array();
// $response["message"] = Array();
$request = json_decode(file_get_contents('php://input'),true);

if($_SERVER['REQUEST_METHOD']=="POST")
{
	if($request['mobile'] == null || $request["otp"]==null)
	{
		$response["http_code"] = 400;
		$response["message"] = "Mobile number and OTP are mandatory fields";
	}
	else if($request['mobile'] == "7736156660" && $request["otp"] == '123456')
	{
		$response["http_code"] = 200;
		$response["message"] = "Successfully verified";
	}
	else 
	{
		$response["http_code"] = 404;
		$response["message"] = "Incorrect OTP";
	}
}
else
{
	$response["http_code"] = 405;
	$response["message"] = "Only POST request allowed";
}

echo json_encode($response);

?>

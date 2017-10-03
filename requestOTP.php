<?php

header("Content-type: application/json; charset=UTF-8");

$response = Array();
$response["message"] = Array();
$request = json_decode(file_get_contents('php://input'),true);

if($_SERVER['REQUEST_METHOD']=="POST")
{
	if($request['mobile'] != null)
	{
		$response["http_code"] = 200;
		$response["message"]["message"] = "OTP sent successfully";
	}
	else
	{
		$response["http_code"] = 400;
		$response["message"]["message"] = "Bad or ill-formed request";
	}

}
else
{
	$response["http_code"] = 404;
	$response["message"]["message"] = "Only POST request can be handled";


}

echo json_encode($response);

?>
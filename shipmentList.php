<?php

header("Content-type: application/json; charset=UTF-8");

$response = Array();
// $response["message"] = Array();
$request = json_decode(file_get_contents('php://input'),true);
//SH-11721-C-PO-1008-4


if($_SERVER['REQUEST_METHOD']=="POST")
{
	if($request['mobile'] == "7736156660")
	{
		$response["http_code"] = 200;
		//$response["message"]["shipments"] = array("SH-11721-C-PO-1008-1","SH-11721-C-PO-1008-2","SH-11721-C-PO-1008-3","SH-11721-C-PO-1008-4","SH-11721-C-PO-1008-5");
		$response["message"]["shipments"] = Array();
		$response["message"]["shipments"][0]["id"] = "SH-11721-C-PO-1008-1";
		$response["message"]["shipments"][0]["pickUpDate"] = "03 Oct 2017";
		$response["message"]["shipments"][0]["deliveryDate"] = "08 Oct 2017";

		$response["message"]["shipments"][1]["id"] = "SH-11721-C-PO-1008-2";
		$response["message"]["shipments"][1]["pickUpDate"] = "03 Oct 2017";
		$response["message"]["shipments"][1]["deliveryDate"] = "08 Oct 2017";
		
		$response["message"]["shipments"][2]["id"] = "SH-11721-C-PO-1008-2";
		$response["message"]["shipments"][2]["pickUpDate"] = "03 Oct 2017";
		$response["message"]["shipments"][2]["deliveryDate"] = "08 Oct 2017";

		//array_push($response["message"]["shipments"], "SH-11721-C-PO-1008-4")
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
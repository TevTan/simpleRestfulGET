<?php 
//To use access http://localhost/api/simpleRestfulGET/c 
//or use http://localhost/api/simpleRestfulGET/js and http://localhost/api/simpleRestfulGET/php

	header("Content-Type:application/json");
	include("function.php");
	
	//Process client request via URL
	if(!empty($_GET['language']))
	{
		//if value send not empty.
		
		$language = $_GET['language'];
		$code = get_code($language);
		
		if(empty($code))
		{
			//language not found
			deliver_response(200, "language not found", NULL);
		}
		else
		{
			//respond language code.
			deliver_response(200, "language found", $code);
		}
	}
	else
	{
		//value send is empty.
		//throw invalid request
		deliver_response(400, "Invalid Resquest", NULL);
	}
	
	function deliver_response($status, $status_message, $data)
	{
		header("HTTP/1.1 $status $status_message");
		
		$response['status'] = $status;
		$response['status_message'] = $status_message;
		$response['data'] = $data;
		
		$json_response = json_encode($response);
		echo $json_response;
	}
?>
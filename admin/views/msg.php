<?php

function itexmo($number,$message,$apicode,$passwd){
		$url = 'https://www.itexmo.com/php_api/api.php';
		$itexmo = array('1' => $number, '2' => $message, '3' => $apicode, 'passwd' => $passwd);
		$param = array(
			'http' => array(
				'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
				'method'  => 'POST',
				'content' => http_build_query($itexmo),
			),
		);
		$context  = stream_context_create($param);
		return file_get_contents($url, false, $context);
}
	
	
	// Message details


	

	if($_POST){

		$numbers = $_POST['numbers'];
		$message = $_POST['msg'];
		$api = "ST-MARKE293786_58AFQ";

		$text = $numbers,";",$msg;

		echo $text;

	}
?>
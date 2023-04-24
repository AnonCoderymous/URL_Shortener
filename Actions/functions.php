<?php
	
	// Function to return a random string
	function randStr() {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$randomString = '';
		for($i=0 ; $i < 10 ; $i++) {
			$index = rand(0, strlen($characters)-1);
			$randomString .= $characters[$index];
		}

		return $randomString;
	}

	// Function to return current Indian Time
	if(!function_exists('getTime')){
		function getTime() {
			date_default_timezone_set('Asia/Kolkata');
			$currentDate = date('h/m/y');
			$currentTime = date('H:i a');
			$current_time_stamp = $currentDate.' '.$currentTime;

			return $current_time_stamp;
		}
	}

	// Function to return host url
	if(!function_exists('returnHostUrl')) {
		function returnHostUrl() {
			$server_protocol = (($_SERVER[ 'SERVER_PROTOCOL' ] === 'HTTP/1.1') ? 'http://' : 'https://');
			$server_name = $_SERVER['SERVER_NAME'];
			$server_path = $_SERVER[ 'REQUEST_URI' ];
			$redirectURL = str_replace('shortener.php', 'redirect.php?token=' ,$server_protocol.$server_name.$server_path);

			return $redirectURL;
		}
	}

	// echo returnHostUrl();
	// returnHostUrl();

?>
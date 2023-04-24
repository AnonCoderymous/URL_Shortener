<?php
	if($_SERVER[ 'REQUEST_METHOD' ] === 'POST' && isset($_POST[ 'shortUrlBtn' ])) {
		extract($_POST);

		// Remove all illegal characters from a url
		$url = filter_var($destinationUrl, FILTER_SANITIZE_URL);

		// Check if url is valid or not
		if(filter_var($url, FILTER_VALIDATE_URL)){
			
			require_once '../Configurations/Config.php';
			require_once './Functions.php';
			
			if($_Connect) {
				
				// Prevent SQLi
				$redirect_code = mysqli_real_escape_string($_Connect, randStr());
				$destinationUrl = mysqli_real_escape_string($_Connect, $url);
				$randomId = mysqli_real_escape_string($_Connect, rand(1000, 10000));
				$currentTimeStamp = mysqli_real_escape_string($_Connect, getTime());

				if(mysqli_query($_Connect, "INSERT INTO `routings`(`id`, `short_url`, `redirect_url`, `created_time`) VALUES ('$randomId','$redirect_code','$destinationUrl','$currentTimeStamp')")) {
					echo 'Your Short URL : '.returnHostUrl().$redirect_code;
				}

			}

		} else {
			
			echo 'Invalid URL !! Example: https://www.google.com.';
		}
	} else {

 

	}

	exit;
?>
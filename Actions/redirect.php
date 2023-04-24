<?php
	if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['token'])) {

		require_once '../Configurations/Config.php';

		$token = mysqli_real_escape_string($_Connect, trim($_GET['token']));

		if($fetchQuery=mysqli_query($_Connect, "SELECT `redirect_url` FROM `routings` WHERE short_url='$token'")) {
			$fetchHandler=mysqli_fetch_assoc($fetchQuery);
			$fetchHandlerCount=mysqli_num_rows($fetchQuery);
			if($fetchHandlerCount===0){
				echo '[!] The URL is invalid with. Token : '.$token;
				exit;

			}
			$redirect_url=$fetchHandler['redirect_url'];
			printf('<script>window.location.href=\'%s\';</script>', $redirect_url);
		}else{
			echo '[!] Error While Running Query.';
		}

	}

	exit;
?>
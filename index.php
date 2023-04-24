<!DOCTYPE html>
<html lang="en">
<head>
	<title>URL Shortener</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="https://www.urlshortner.com">
	<meta name="description" content="Shorten URLs easy and quickly. ShortURL is a URL shortener to reduce a long link. Use our tool to shorten links and then share them, in addition you can monitor traffic statistics.">
	<meta name="keyword" content="URL Shortner, URL Redirect">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/773335bcdf.js" crossorigin="anonymous"></script>
	<style type="text/css">
		.navbar{
			position: fixed;
			top: 1px;
			width: 100%;
		}
		.form-group {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			text-align: center;
			height: 100vh;
			line-height: 50px;
		}
		label{
			font-size: 18px;
			font-weight: bold;
		}
		.btn {
			margin-top: 10px;
			width: 250px;
		}
		.form-control {
			width: 350px;
		}
	</style>
</head>
<body>
	
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
	    <a class="navbar-brand" href="#">
	    	URL Shortner
	    </a>
	  </div>
	</nav>

	<form action="./Actions/shortener.php" method="POST" enctype="application/x-www-form-urlencoded ">
	  <div class="form-group">
	  	<h2>Start your journey to shorten links. </h2>
	  	<p>Make user-friendly, short and secure redirect links.</p>
	    <label for="exampleInputUrl1">Paste the URL to be shortened</label>
	    <input type="text" name="destinationUrl" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Example: https://www.examplewebsite.com/" required>
	    <button type="submit" name="shortUrlBtn" class="btn btn-primary">Shorten URL</button>
	  </div>
	</form>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
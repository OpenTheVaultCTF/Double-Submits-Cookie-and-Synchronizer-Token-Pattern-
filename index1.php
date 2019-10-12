<html>
	<head>
		<title> CSRF protection</title>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="public/css/bootstrap.min.css">
        <script src="public/js/jquery.min.js"></script>
        <script src="public/js/bootstrap.min.js"></script>
		<style>
			.bgimg-1 {
  				background-image: url('/w3images/parallax1.jpg');
  				min-height: 100%;
  				background-image: url(pic.jpg);
  				height: 100%; 
  				background-position: center;
  				background-repeat: no-repeat;
  				background-size: cover;
  				background-color: #cccccc;
				}
		</style>
	</head>
	<body>

		<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
		<div align='center'>
		<br>
			<a href="stplogin.php" class="button"><button type="submit" class="btn btn-success" id="syn" name="syn" >CSRF protection by Syncronize Token pattern </button></a>
		</div>
		<br>
		<div align='center'>
			<a href="dsclogin.php" class="button"><button type="submit" class="btn btn-info" id="dsc" name="dsc"> CSRF protection by double submit cookies </button></a>
		</div>
		</div>
		
	
	</body>
</html>
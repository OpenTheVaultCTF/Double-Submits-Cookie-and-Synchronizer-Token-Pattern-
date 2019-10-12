<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
			body {font-family: Arial, Helvetica, sans-serif;}
			form {border: 3px solid #f1f1f1;}

			input[type=text], input[type=password] {
			  width: 100%;
			  padding: 12px 20px;
			  margin: 8px 0;
			  display: inline-block;
			  border: 1px solid #ccc;
			  box-sizing: border-box;
			}

			button {
			  background-color: #4CAF50;
			  color: white;
			  padding: 14px 20px;
			  margin: 8px 0;
			  border: none;
			  cursor: pointer;
			  width: 100%;
			}

			button:hover {
			  opacity: 0.8;
			}

			.cancelbtn {
			  width: auto;
			  padding: 10px 18px;
			  background-color: #f44336;
			}

			.imgcontainer {
			  text-align: center;
			  margin: 24px 0 12px 0;
			}

			img.avatar {
			  width: 11%;
			  border-radius: 50%;
			}

			.container {
			  padding: 16px;
			}

			span.psw {
			  float: right;
			  padding-top: 16px;
			}

			/* Change styles for span and cancel button on extra small screens */
			@media screen and (max-width: 300px) {
			  span.psw {
				 display: block;
				 float: none;
			}
			.cancelbtn {
				 width: 100%;
			}
			}
		</style>
	</head>
	<body>

		<h2>Login Form</h2>

		<form action="dsclogin.php" method="post">
			<div class="imgcontainer">
				<img src="img_avatar2.png" alt="Avatar" class="avatar">
			</div>

			<div class="container">
				<label for="uname"><b>E-mail</b></label>
				<input type="text" placeholder="Enter Username" name="email" required>

				<label for="psw"><b>Password</b></label>
				<input type="password" placeholder="Enter the password!" name="password" required>
					
				<button type="submit" id="submit" name="submit">Login</button>
				<label>
				  <input type="checkbox" checked="checked" name="remember"> Remember me
				</label>
			</div>

			<div class="container" style="background-color:#f1f1f1">
				<a href="index.php"><button type="button" class="cancelbtn">Cancel</button></a>
				<span class="psw">Forgot <a href="#">password?</a></span>
			</div>
		</form>
	</body>
</html>


<?php
    if(isset($_POST['submit'])) {
      user_login();
    }
?>

<?php
    function user_login()
    {
      	$my_email = 'praveen.wijewardane@gmail.com';
      	$my_password = 'praveen123';
      	$email_in = $_POST['email'];
      	$password_in = $_POST['password'];
      	if(($email_in == $my_email)&&($password_in == $my_password)) {
	       
	        session_start();
	        
	        $sessionID = session_id();
	        setcookie('session_cookie', $sessionID, time() + 3600, '/');
	        $token = generate_token();
	        setcookie('csrf_token', $token, time() + 3600, '/', 'localhost',true);
	        header("Location:dscaddinfo.php");
        	exit;
    	}
    	else{
        	echo "<script> alert('Invalid Credentials, Please try again.') </script>";
	    }
	}
	function generate_token(){
	    return sha1(base64_encode(openssl_random_pseudo_bytes(30)));
	}
?>
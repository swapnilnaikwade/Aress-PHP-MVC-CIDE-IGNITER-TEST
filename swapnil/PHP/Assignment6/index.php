<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V16</title>
	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				
				<form class="login100-form  p-b-33 p-t-5" action="cookie.php" method="post">
					<div class="wrap-input100">
						<input class="input100" name="email" type="text" value="<?php if(isset($_COOKIE["email"])) { echo $_COOKIE["email"]; } ?>"required>	
					</div>
					<div class="wrap-input100 ">
						<input class="input100" name="pass" type="password" value="<?php if(isset($_COOKIE["pass"])) { echo $_COOKIE["pass"]; } ?>" class="input-field"required>
					</div>
					<div class="wrap-input100 ">
					    <input type="checkbox" name="remember" /> Remember me
					</div>	
					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
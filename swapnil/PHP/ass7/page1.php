<html>
	<head>
		<link href= "assets/css/master.css" rel="stylesheet" >
	</head>
	<body>
		<div class="container">
			<form action="page2.php" method="post">
				<p>Username: <input name="username" id="username" type="text" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>" class="input-field" required></p> 					     		
				<p>Password: <input name="password" id="password" type="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" class="input-field" required></p>
				<p><input type="checkbox" name="remember" /> Remember me</p>
				<p><input type="submit" value="Login"></span></p>       
			</form>
		</div>
	</body>
</html>
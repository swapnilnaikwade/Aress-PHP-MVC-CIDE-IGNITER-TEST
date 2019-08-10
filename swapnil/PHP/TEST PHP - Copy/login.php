
<?php include 'header.php';?>
<html>
    <head>
        <!--Bootstrap CSS-->
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <!--Custom CSS-->
        <link href="assets/css/master.css" rel="stylesheet">
    </head>
    <body>
<h1 style="text-align:center">
        Angular Login Example
    </h1>
    <div class="login">
        <h2 class="login-header">Log in</h2>
        <!--  login form -->
        <form  class="login-container" method="post" action="loginDB.php">
        <p> <input type="email" placeholder="Email" id="email" name="email"> </p>
       <p> <input type="password" placeholder="Password" id="password" name="password"></p>
       <p> <input type="submit" value="Log in" >  </p>
       </form>
    </div>
	</body>
	</html>
	<?php include 'footer.php';?>
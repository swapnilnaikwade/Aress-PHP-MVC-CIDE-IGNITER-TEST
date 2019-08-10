<?php
	include('head.php');
	$assignment = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], '/') + 1);
	@$check = $_SESSION["logged_in"] ;
  $check;
if($check==0) {?>
<!-- Header section -->
<header class="main-header">
	<div class="container clearfix">
		<div class="navbar">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="../../index.php"><strong>PHP</strong></a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
				        <li><a href="index.php">Home</a></li>
						<li><a href="registration.php">Register</a></li>
						<li><a href="login.php">Login</a></li>
				</ul>
			</div>
		</div>
	</div>
</header>
<?php }?>
<?php if($check==1) {?>
<!-- Header section -->
<header class="main-header">
	<div class="container clearfix">
		<div class="navbar">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="../../index.php"><strong>PHP</strong></a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
						<li><a href="myProfile.php">Home</a></li>
						<li><a href="userDetails.php">User Details</a></li>
						<li><a href="logout.php">Logout</a></li>
				</ul>
			</div>
		</div>
	</div>
</header>
<?php }?>
<?php
    session_start();
    error_reporting(0);
    $status =$_SESSION['status'];
?>
<header class="main-header">
	<nav class="navbar navbar-default main-header-inner">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">NEST</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="#">About</a></li>
					<li><a href="login.php" <?php echo ( $status == 1) ? 'style="display:none;"' : '' ?> >Login</a></li>
					<li><a href="logout.php" <?php echo ( $status == 0) ? 'style="display:none;"' : '' ?> >Logout</a></li>
					<li><a href="registration.php" <?php echo ($status == 1) ? 'style="display:none;"' : '' ?>>Sign up</a></li>
					<li><a href="friendList.php" <?php echo ( $status == 0) ? 'style="display:none;"' : '' ?> >Friends</a></li>
				</ul>
			</div>
		</div>
	</nav>
</header>
  
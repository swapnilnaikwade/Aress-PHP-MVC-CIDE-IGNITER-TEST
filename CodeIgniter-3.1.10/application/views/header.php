<!DOCTYPE html>
<html lang="en">
<head>
	<!--Bootstrap CSS-->
    <link href="<?php echo base_url("assets/css/bootstrap.css");?>" rel="stylesheet">
	<!--Custom CSS-->
    <link href="<?php echo base_url("assets/css/master.css");?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/css/animate.css");?>" rel="stylesheet">
</head>
<body>
<!--Header-->
<header class="main-header clearfix">
	<div class="navbar">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle navbar-button collapsed" data-toggle="collapse" data-target="#my-navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="logo" href="#">
					<img src="assets/images/logo.png" alt="Logo">
				</a>
			</div>
			<div id="my-navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li ><a href="<?php echo base_url();?>">Home</a></li>					
						<li><a href="<?php echo base_url('Admin/adminLogin');?>">Admin Login</a></li>
						<li><a href="<?php echo base_url('login/user_login');?>">Student Login</a></li>
                        <li><a href="<?php echo base_url('Logout/logoutUser');?>">Logout</a></li>
				</ul>
			</div>
		</div>
	</div>
</header>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/wow.min.js"></script> 
<script>
	jQuery(function($) {
	new WOW().init();
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollup').fadeIn();
			} else {
				$('.scrollup').fadeOut();
			}
		});
		$('.scrollup').click(function(){
			$("html, body").animate({ scrollTop: 0 }, 1000);
				return false;
		});
	});
</script>
<script>
	function myFunction() {
		var x = document.getElementById("myTopnav");
		if (x.className == "topnav") {
			x.className += " responsive";
		} else {
			x.className = "topnav";
		}
	}
</script>
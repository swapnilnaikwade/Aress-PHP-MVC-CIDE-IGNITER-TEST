<?php
 //session_start();
 include 'connectdb.php'; 
 include 'header.php';
 //include 'left.php'; 
 if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	$query= "SELECT * FROM staff WHERE email='$email' && password='$password' ";
	$data= mysqli_query($cid, $query);
	$total= mysqli_num_rows($data);
	if($total==1){

		header('location:profile.php');
		$_SESSION["user_email"]=$email;
		$_SESSION['status'] = 1;
	}
	else{ ?>
		<div class="alert alert-danger" role="alert">
			Login failed!
		</div>
	<?php
	}
 }
 if(!$_SESSION['status']) { ?>
<!-- login section -->
	<div class="contact-us-section clearfix"><?php
		include 'left.php'; ?>
		<!-- <form method="post" action="profile.php"> -->
		<div class=" container contact-us-header">
			<h3>Login Here</h3>
			<div class="contact-us-content">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
						<form action="" method="POST" >
							<div class="row">
								<div class="form-group">
                                    <input type="emial" class="form-control" id="email" placeholder="username" name="email" required>
                                </div>
                                <div class="form-group">									
                                    <input type="text" class="form-control" id="password" placeholder="password" name="password" required>
                                </div>
							</div>
							<button type="submit" name="submit" class="btn">Login</button>
						</form>
					</div>
				</div>
			</div>
		</div>
<!-- </form> -->
</div>
 <?php }	?>
<?php 

 
 include 'footer.php';
 ?>
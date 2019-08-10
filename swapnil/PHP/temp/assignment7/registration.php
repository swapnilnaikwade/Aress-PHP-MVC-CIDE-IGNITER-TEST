<?php

$usr = "root";
$pwd = "";
$db = "assignment7";
$host = "localhost";
session_start();
// Create connection
$cid = mysqli_connect($host,$usr,$pwd,$db);

// Check connection
if (!$cid) { 
	die("ERROR: " . mysqli_connect_error() . "\n"); 
}

//IF there is post then insert data.
if ($_SERVER['REQUEST_METHOD'] == "POST") { 
	if($_POST['name']!="" && $_POST['contact']!="" && $_POST['mail']!="" && $_POST['password']!="" && $_POST['address']!="")
	{
		// the following 4 lines are needed if your server has register_globals set to Off
		$name= $_POST['name'];
		$contact = $_POST['contact'];
		$mail = $_POST['mail'];
		$password = md5($_POST['password']);
		$address = $_POST['address'];
		$imageName = 'C:/xampp/htdocs/php/VaibhavKanade/assignments/assignment7/profilePictures/0.jpg';
		$insertData = " INSERT INTO profile (name, contact, mail, password, address, imageName) VALUES ('$name', $contact,'$mail','$password','$address','$imageName') ";
		$insertResult = mysqli_query($cid,"$insertData");
		
		if (!$insertResult) { 
		echo("ERROR: " . mysqli_error() . "\n$insertData\n"); 
		}
		echo ("Registration successful.");
	}else
	{
		echo ("Please enter all fields.");
	}
 }	
?>


<html>
	<?php include('header.php'); ?>
	<body>
			<div class="container clearfix">
				<div class="resultBox assignments">	
					<div class="col-lg-8 col-lg-offset-4">
						<div class="row p10 ">
							<?php if($check==0) {?>
							<div class="col-lg-7 p10 border">
								<div class="boxInner">
									<form name="fa" action="" method="post" enctype="multipart/form-data">
										<p><b>Name: </b> 
											<input type="text" name="name" size=40 value=""> </p>
										<p><b>Contact No:</b> 
											<input type="text" name="contact" size=40 value=""></p>
										<p><b>E-mail</b> 
											<input type="text" name="mail" size=40 value=""></p>
										<p><b>Password</b> 
											<input type="password" name="password" size=40 value=""></p>	
										<p><b>Address: </b> 
											<textarea name="address" rows=5 cols=40></textarea></p>
										
										<input type="hidden" name="flag"></p>
										<input type="hidden" name="id"></p>
											
										<p><input type="submit" class="btn" value="Submit"></p>
									</form>
								</div>
							</div>
							<?php }else{?>
							<h2 class="m100"><br/>You are already logged-in<br/><br/></h2>
							<?php }?>
						</div>
					</div>
				</div>
			</div>
						
			
		<?php include('footer.php'); ?>
	</body>
</html>
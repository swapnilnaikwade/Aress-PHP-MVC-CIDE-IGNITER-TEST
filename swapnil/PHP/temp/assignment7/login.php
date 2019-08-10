<?php
	session_start();
	$usr = "root";
	$pwd = "";
	$db = "assignment7";
	$host = "localhost";
	// Create connection
	$cid = mysqli_connect($host,$usr,$pwd,$db);

	// Check connection
	if (!$cid) { 
		die("ERROR: " . mysqli_connect_error() . "\n"); 
	}
?>

<html>
	<?php include('header.php'); ?>
	<body>
			<div class="container clearfix">
				<div class="resultBox assignments">
					<div class="col-lg-8 col-lg-offset-4">
						<div class="row m100">
								<?php
									$linksId = '';
									$flag = 0;

									//IF there is post then insert data.
									if ($_SERVER['REQUEST_METHOD'] == "POST") { 
										if($_POST['mail']!="" && $_POST['password']!="")
										{
											$mail = $_POST['mail'];
											$password = $_POST['password'];
											$passwordmd5 = md5($password);
											$checkData = " SELECT * FROM profile WHERE mail='$mail' AND password='$passwordmd5' ";
											$checkResult = mysqli_query($cid,"$checkData");
											if (mysqli_num_rows($checkResult)==0) 
											{ 
												echo 'The username or password are incorrect!';
											}else{
												if (!$checkResult) { 
													echo("ERROR: " . mysqli_error() . "\n$checkData\n"); 	
												}else
												{	
													while ($row = mysqli_fetch_assoc($checkResult)) 
													{ 
														
														$nameLink = $row['name'];
														$contactLink= $row['contact'];
														$mailLink =	$row['mail'];
														$passwordLink =	$row['password'];
														$addressLink = $row['address'];
														$linksId = $row['id'];

														if($mailLink==$mail && $passwordLink== $passwordmd5)
														{
															@$_SESSION["id"] = $linksId;
															@$_SESSION["logged_in"] = 1;
															header("Location: myProfile.php");			
														}else{
															echo 'The username or password are incorrect!';
														}
													}
												}
											}
										}else{
											echo 'Please enter username and password.';
										}	
									}	
								?>
							<?php if($check==0) {?>
							<div class="col-lg-7 p10 border">
								<div class="boxInner">
									<form name="login" action="" method="post" enctype="multipart/form-data">
										<p><strong>E-mail</strong> 
											<input type="text" name="mail" size=40 value=""></p>
										<p><strong>Password</strong> 
											<input type="password" name="password" size=40></p>	
										
										<input type="hidden" name="flag" value="<?php echo $flag;?>"></p>
										<input type="hidden" name="id" value="<?php echo $linksId;?>"></p>
											
										<p><input type="submit" class="btn" value="Submit"></p>
									</form>
								</div>
							</div>
							<?php }else{?>
							<h2><br/>You are already logged-in<br/><br/></h2>
						 <?php }?>
						</div>
					</div>
				</div>
			</div>
		<?php include('footer.php'); ?>
	</body>
</html>
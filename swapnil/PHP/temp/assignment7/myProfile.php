<?php
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
	session_start();
	if(isset($_GET['idAmol']) && $_GET['idAmol'] == 1){
		$linksId = 1;
		$_SESSION["logged_in"] = 1;
	}else{
		@$linksId = $_SESSION["id"];
	}
	
?>
<html>
	<?php include('header.php'); ?>
	<body>	
		<div class="container clearfix">
			<div class="resultBox assignments">
			  <?php if(@$_SESSION["logged_in"] == 1){?>
				<div class="row grey p10">
					<div class="col-lg-4 col-lg-offset-2">
						<strong><u>Profile Photo :</u><br/><br/></strong>
						<?php if( file_exists("profilePictures/$linksId.jpg") ){?>	
						<img class="profilepic border" src="profilePictures/<?php echo $linksId;?>.jpg">
						<?php } else {?>
						<img class="profilepic border" src="profilePictures/0.jpg">
						<?php }?>
						<form action="myProfile.php" method="post" enctype="multipart/form-data">
							<label for="file"><br/>Upload Profile:</label>
							<input type="file" name="file" id="file"> <br/>
							<input type="submit" class="" name="submit" value="Submit"/>
							<input type="hidden" name="flag" value="2"></p>
							<input type="hidden" name="id" value="<?php echo $linksId;?>"></p>
						</form>
					</div>
					<div class="col-lg-offset-1 col-lg-5">
						<?php
							$flag = 0;
							$name = '';
						
							$checkData = "SELECT * FROM profile WHERE id=$linksId";
							$checkResult = mysqli_query($cid,"$checkData");
							if (!$checkResult) { 
									echo("ERROR: " . mysqli_error() . "\n$checkData\n"); 	
							}else
							{
									if ( isset($_GET['u']) && $_GET['u'] == 1 )
								{
									echo "Update Successful<br/>";
								}
								$myInformation = '';

								while ($row = mysqli_fetch_assoc($checkResult)) { 
									$linksId = $row['id'];
									$nameLink = $row['name'];
									$contactLink = $row['contact'];
									$mailLink = $row['mail'];
									$addressLink = $row['address'];
									
									$myInformation .= "<Strong><u>My Profile Details</u></Strong><br/><br/>";
									$myInformation .= "<Strong>Id : </Strong>".$linksId."<br/><br/>";
									$myInformation .= "<Strong>Name : </Strong>".$nameLink."<br/><br/>";
									$myInformation .= "<Strong>Contact No : </Strong>".$contactLink."<br/><br/>";
									$myInformation .= "<Strong>E-mail : </Strong>".$mailLink."<br/><br/>";
									$myInformation .= "<Strong>Address : </Strong>".$addressLink."<br/><br/>";
									$myInformation .= "<form name='edit' action='myProfile.php' method='post' enctype='multipart/form-data'>
										  <p><input type='submit' class='' value='edit'></p>
										  <input type='hidden' name='flag' value='0'></p>
										  </form>";
									echo $myInformation;
								}
							}
							if ($_SERVER['REQUEST_METHOD'] == "POST") { 
								if($_POST['flag'] == 0)
								{
									echo "<form name='update' action='' method='post' enctype='multipart/form-data'>
											<p><b>Name: </b> <br/>
											<input type='text' name='name' size=40 value=$nameLink> </p>
											<p><b>Contact No:</b> <br/>
											<input type='text' name='contact' size=40 value='$contactLink'></p>
											<p><b>E-mail</b> <br/>
											<input type='text' name='mail' size=40 value='$mailLink'></p>
											<p><b>Address: </b> <br/>
											<textarea name='address' rows=5 cols=40>$addressLink</textarea></p>									
											<input type='hidden' name='flag' value='1'></p>		
											<p><input type='submit' class='' value='update'></p>	
											</form>";
								}
								if($_POST['flag'] == 1)
								{
									if($_POST['name']!="" && $_POST['contact']!="" && $_POST['mail']!="" && $_POST['address']!="")
									{
										// the following 4 lines are needed if your server has register_globals set to Off
										$name= $_POST['name'];
										$contact = $_POST['contact'];
										$mail = $_POST['mail'];
										$address = $_POST['address'];
										
										$updateData = "UPDATE profile SET name = '$name',contact = '$contact',mail = '$mail', address = '$address' WHERE id=$linksId";
										$updateResult = mysqli_query($cid,"$updateData");
										
										if (!$updateResult) { 
											echo("ERROR: " . mysqli_error() . "\n$insertData\n"); 
										}
										echo ("Updated successfully.");
										header("location:myProfile.php?u=1");
									}else
									{
										echo ("Click on edit and Please enter all fields.");
									}
								}
								if($_POST['flag'] == 2)
								{
									if ((($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/pjpeg")) && ($_FILES["file"]["size"] < 2000000)) 
									{
										if ($_FILES["file"]["error"] > 0)
										{
											echo "Error: " . $_FILES["file"]["error"] . "<br />";
										}
										else
										{
											$updateDataImage = "UPDATE profile SET imageName = 'C:/xampp/htdocs/php/VaibhavKanade/assignments/assignment7/profilePictures/$linksId.jpg'";
											$updateResultImage = mysqli_query($cid,"$updateDataImage");
											
											if (!$updateResultImage) { 
												echo("ERROR: " . mysqli_error() . "\n$updateDataImage\n"); 
											}
											echo ("Updated successfully.");
											//separate out filename and extension
											$temp = explode(".", $_FILES["file"]["name"]);
											$newfilename = $linksId. '.' . end($temp);
											
											move_uploaded_file($_FILES["file"]["tmp_name"],  "profilePictures/" . $newfilename);
										}
									}else {
										echo "Invalid File";
									}
								}
							}
						?>
					</div>
				</div>
				<?php }else{ ?>
				<div class="boxInner1 border">
					<h2 class="text-center"><span>Please login</span></h2><br>						
				</div>	
				<?php } ?>
			</div>
		</div>
		<?php include('footer.php'); ?>
	</body>
</html>
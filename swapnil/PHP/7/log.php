<?php include 'header.php';?>
<html>
   <body>

<?php
	$usr = "root";
	$pwd = "";
	$db = "linksdb";
	$host = "localhost";
	// Create connection
	$cid = mysqli_connect($host,$usr,$pwd,$db);
	if (!$cid) {
					die("ERROR: " . mysqli_connect_error() . "\n");
	}

	echo $email = mysqli_real_escape_string($cid, $_POST['email']);
	echo $password = mysqli_real_escape_string($cid,$_POST["password"]);

	 //if User details through login is not empty
	 if (!empty($email) && !empty($password))
	 {
	 //look up for user details on the database
	  $query = "SELECT * FROM registration WHERE email = '$email' AND password = '$password' ";
	  $data = mysqli_query($cid, $query);
	  $result = mysqli_num_rows($data);
	
	  if ($result == 1) {

	   $rows = mysqli_fetch_array($data);
	   //Just display user email and password
	  echo "<br><br>";
	  echo "LOGIN Successfull..........!!";
	  $_SESSION['status'] = 1;
	 
	
	  } else {
	   //the user name or password are incorrect
	   echo "Wrong user email and password";
	   $Message = urlencode("Some error occured please try after some time ");
	 // header("Location:login.php?Message=".$Message);
	  }
	 }
	 $email = trim($_POST['email']);
	 $password = md5(trim($_POST["password"]));
	 ?>
	 <html>
	   <body>
		 <table  text-align="center" cellspacing = "0" cellpadding = "3" border = "1" width="100%">
			<tr>
				<th colspan="7"><h2>Student Record</h2></th>
			</tr><th> ID </th><th> firstName </th><th> lastName </th>	<th> Email </th>	<th> Address </th><th> password </th><th> Image </th>
		  <?php
		$email=$_POST['email'];
		$viewData = "SELECT * FROM registration where email='$email'";	
		$viewResult = mysqli_query($cid,"$viewData");
		$result  = mysqli_num_rows($viewResult);
	
		if (mysqli_num_rows($viewResult) > 0) {
		// output data of each row
		while($rows = mysqli_fetch_assoc($viewResult)) {
		?>
		<tr>
		  <td><?php echo $rows['id']; ?></td>
		  <td><?php echo $rows['firstname']; ?></td>
		  <td><?php echo $rows['lastname']; ?></td>
		  <td><?php echo $rows['email']; ?></td>
		  <td><?php echo $rows['password']; ?></td>
		  <td><?php echo $rows['address']; ?></td>
		  <td><?php   echo '<img src="data:image/jpeg;base64,'.base64_encode($rows['image'] ).'"/>';?></td>
		  <td><a href="<?php echo 'update.php?id='.$rows['id'] ?>">Edit Profile</a></td>
	  </tr>
	<?php
	}
	}
	mysqli_close($cid);
	?>
	</table>
	</body>
	</html
<?php include 'footer.php';?>
















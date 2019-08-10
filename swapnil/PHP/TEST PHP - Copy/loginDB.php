<?php include 'header.php';?>
<?php include 'dbconnection.php';?>
<?php

	$email = $_POST['email'];
	$password = $_POST["password"];

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
	   header('location:display.php');
	  } else {
	   //the user name or password are incorrect
	   echo "Wrong user email and password";
	   $Message = urlencode("Some error occured please try after some time ");
	 header("Location:login.php?Message=".$Message);
	  }
	 }
	 else
	 {
		  header('Location:login.php'); 
	 }
	 ?>

<?php include 'footer.php';?>
















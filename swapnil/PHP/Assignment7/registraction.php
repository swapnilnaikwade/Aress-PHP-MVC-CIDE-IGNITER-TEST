<!-- Registration Page -->
<?php
$username =trim($_POST['username']);
$email =trim($_POST['email']);
$password =trim(md5($_POST['password']));
$phone =trim($_POST['phone']);
$namerr ="" ;

// If all fields of registrtion form are not empty 
	if(!empty($username) || !empty($email) || !empty($password) || !empty($phone)){
		$usr="root";
		$pwd="";
		$db="userdb";
		$host="localhost";

//Connecting database
		$conn=mysqli_connect($host,$usr,$pwd,$db);
		if(!conn) {
			echo "Error :" . mysqli_connect_error() ;
		}else {
		    echo "Connected Sucessfully <br> ";
		}
	}
	echo $sql1 = "INSERT INTO users (username,email,password,phone) VALUES ('".$username."','".$email."', 
	'".$password."', ".$phone.")";
	if (mysqli_query($conn, $sql1)) {
		$last_id = $conn->insert_id;
		echo ("New record created successfully");
		header('location:image.php?id='.$last_id);
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}	
mysqli_close($conn);
?>
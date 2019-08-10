<?php
include 'connectdb.php'; 

//IF there is post then insert data.
if ("POST") { 

	// the following 4 lines are needed if your server has register_globals set to Off
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $Password = $_POST['Password'];
   
    //echo $picture;
        // $insertData = " INSERT INTO `staff`(`firstName`, `lastName`, `email`, `Password`, 'picture') VALUES ( '$firstName', '$lastName' ,'$email' ,'$Password', '$picture')";
        $insertData = " INSERT INTO `staff`(`firstName`, `lastName`, `email`, `password`) VALUES ('$firstName', '$lastName' ,'$email' ,'$Password')";
		$insertResult = mysqli_query($cid,"$insertData");
		
		if (!$insertResult) { 
		echo("ERROR: " . mysqli_error() . "\n$insertData\n"); 
		}else{
         $last_id = $cid->insert_id;
            echo ("Data is inserted successfully.\n");
            header('location:imageUpload.php?id='.$last_id);
        }
	}

?>
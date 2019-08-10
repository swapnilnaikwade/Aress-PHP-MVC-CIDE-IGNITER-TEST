<?php include 'connection.php' ?>
<?php
$insertIds = $_POST['insertId'];
//Upload file only it it is gif, jpeg, png and below 2MB
if ((($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/png")) && ($_FILES["file"]["size"] < 20000)) {
	if ($_FILES["file"]["error"] > 0) {
        echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }else{  
		//Show filename without file extension
		echo "Upload: " . $_FILES["file"]["name"] . "<br />";
		echo "Type: " . $_FILES["file"]["type"] . "<br />";
		echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
        echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
    }
        // If file already exists 
        if (file_exists("upload/" . $_FILES["file"]["name"])) {
            echo $_FILES["file"]["name"] . " already exists. ";
		//If file is not already present then upload it to folder "upload" and increment its count for next file	
        } else {
            $files1 = $_FILES["file"]["name"]; 
            print_r($files1);
            $cnt = count($files1);
            $cnt--;
            $new = $files1[$cnt];
            $url = basename($new, ".jpg");
            $url += 1;
            $folder='upload/'.$files1;
            move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . "$url.jpg");
            echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
        }
            if($files1!=""){
                $query= "UPDATE `users` SET `profile_image`='$files1' WHERE id = '$insertIds' ";
                $insertResult = mysqli_query($conn,"$query");
                    if (!$insertResult) { 
                        echo("ERROR: " . mysqli_error() . "\n$query\n"); 
                    }
                    else{
                        header('location:login.php');
                        //echo ("Data is inserted successfully.\n");
                    }
        }
    }

?>


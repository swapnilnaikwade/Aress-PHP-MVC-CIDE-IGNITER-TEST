<?php include 'dbconnection.php';?>
<?php
//Accepting only .gif .jpeg and .pjpeg file
if ((($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/pjpeg"))) {
    if ($_FILES["file"]["error"] > 0) {
        echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    } else {
        
        //Showing file parameters
        echo "Upload: " . $_FILES["file"]["name"] . "<br />";
        echo "Type: " . $_FILES["file"]["type"] . "<br />";
        echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
        echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
   
        if (file_exists("upload/" . $_FILES["file"]["name"])) {
            echo $_FILES["file"]["name"] . " already exists. ";
        } else {
            $files1 = scandir("upload");          
            $file = addslashes(file_get_contents($_FILES["file"]["tmp_name"]));
            $TargetPath= "upload/" .$_FILES["file"]["name"];
            $sql = "insert into images SET img=' $TargetPath'"  ;
            if (mysqli_query($cid, $sql)) {
               echo "Record updated successfully";
               header('location:display.php');
           } else {
               echo "Error updating record: " . mysqli_error($cid);
           }
   //Uploading file in local storage
            move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);

            
        }
    }
} else {
    echo "Invalid file";
}
?>
<?php

//Accepting only .gif .jpeg and .pjpeg file
if ((($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/pjpeg")) && ($_FILES["file"]["size"] < 20000)) {
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
            $cnt = count($files1);
            echo "lenght " . $cnt;
            $cnt--;
            $new = $files1[$cnt];
            $url = basename($new, ".jpg");
            $url += 1;
   
   //Uploading file in local storage
            move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . "$url.jpg");
        }
    }
} else {
    echo "Invalid file";
}
?>
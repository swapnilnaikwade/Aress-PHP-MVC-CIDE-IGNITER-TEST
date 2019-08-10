<?php
include 'connectdb.php'; 
$insertIds = $_POST['insertId'];
print_r($insertIds);
if($_POST){
    // check the extention of file
    if ((($_FILES["file"]["type"] == "image/gif")
    || ($_FILES["file"]["type"] == "image/jpeg")
    || ($_FILES["file"]["type"] == "image/pjpeg"))
    && ($_FILES["file"]["size"] < 20000))
        {
            if ($_FILES["file"]["error"] > 0)
            {
                echo "Error: " . $_FILES["file"]["error"] . "<br />";
            }
            else{
                if($insertIds==true){
                    $fileName = $_FILES["file"]["name"] ;
                    $tempName= $_FILES["file"]["tmp_name"];
                    $folder = 'upload/'.$fileName;
                    move_uploaded_file($tempName, $folder);
                    //echo "<img src='$folder' height ='100' width = '100'/>"; 
                        if($fileName!=""){
                            $query= "UPDATE `staff` SET `picture`='$folder' WHERE id = '$insertIds' ";
                            
                            $insertResult = mysqli_query($cid,"$query");
                                if (!$insertResult) { 
                                    echo("ERROR: " . mysqli_error() . "\n$query\n"); 
                                }
                                else{
                                    header('location:login.php');
                                    //echo ("Data is inserted successfully.\n");
                                }
                        }
                }
            }
    }
    else
    {
    echo "Invalid file";
    }
}

?>	
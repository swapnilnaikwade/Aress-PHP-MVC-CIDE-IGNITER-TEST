<?php include 'dbconnection.php';?>
<?php
   if (isset($_FILES['image']) && $_FILES['image']['size'] > 0) {

      $tmpName  = $_FILES['image']['tmp_name'];

  $files1 = scandir("upload"); 
  print_r ($files1) ;    
   
            $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
            $TargetPath= "upload/" .$_FILES["image"]["name"];
            echo $TargetPath ; 
      $query = "UPDATE images SET img='$TargetPath' WHERE id =".$_GET['id'];
     
    echo  $_GET['id'];
      $deleteResult = mysqli_query($cid, $query);  
   header('location:display.php');
}
else {
   print "No image selected/uploaded";
}
?>
<form action="" method="post" enctype="multipart/form-data" name="changer">
<strong style="color: #FFD700;">Upload your image:</strong><br />
<input name="MAX_FILE_SIZE" value="102400" type="hidden"><br /><br />
<input name="image" accept="image/jpeg" type="file">
<input type="submit" value="Submit">
</form>
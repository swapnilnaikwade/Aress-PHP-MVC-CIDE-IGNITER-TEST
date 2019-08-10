	
   <?php include 'dbconnection.php';?>
   <?php  
   if($_POST){
      $ID=$_POST['id'];
      $imagename=$_POST['file_name'];
      $deleteData = " DELETE FROM images WHERE id =$ID";
      $deleteResult = mysqli_query($cid, $deleteData);
      unlink('./'.$imagename);
      header('location:display.php');
   }
    ?>
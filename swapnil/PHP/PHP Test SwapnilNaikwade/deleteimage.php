	<!--Delete image from Directory and database-->
   <?php include 'dbconnection.php';?>
   <?php  
   if($_POST){
      $id=$_POST['id'];
      $imageName=$_POST['file_name'];
      $deleteData = " DELETE FROM images WHERE id =$id";
      $deleteResult = mysqli_query($cid, $deleteData);
      unlink('./'.$imageName);
      header('location:display.php');
   }
    ?>
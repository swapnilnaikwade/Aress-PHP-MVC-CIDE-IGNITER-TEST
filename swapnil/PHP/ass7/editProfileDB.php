
<?php include 'connectdb.php'; ?>
<?php
 
if($_POST){ 
  // echo $_SESSION["user_email"]=$email;
  $id = $_POST['id'];
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $email = $_POST['email'];
  

   if(!empty($firstName) && !empty($lastName) && !empty($email)){
         
      $updateData = " UPDATE `staff` SET firstName = '$firstName', lastName = '$lastName', email = '$email' WHERE id = '$id' ";
      //echo $_SESSION["user_email"]=$email;
      $updateResult = mysqli_query($cid,$updateData);

      if (!$updateResult) {
          echo("ERROR: " . mysqli_error() . "\n$updateResult\n"); 
      }
      else{

         // echo ("Data is updated successfully.\n");
         // $_SESSION["user_email"]=$email;
         // $_SESSION['status'] = 0;
         // echo $_SESSION["user_email"]=$email;

         header('location:showEditProfile.php?id='.$id);
      }
   }
   else{
      echo "<script>alert('update failed');</script>";
      // header('location:editProfile.php?succes=1);
      header('location:editProfile.php?id='.$id);
   }
 
  
} 
 


?>
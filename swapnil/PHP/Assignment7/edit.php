<!-- Edit profile page -->
<?php include 'header.php'; ?>
<?php include 'connection.php'; ?>
<?php
if($_GET)
{
 //View data from database
 $viewSpecificData = "SELECT * FROM users WHERE id = ".$_GET['id'];
 $viewSpecificResult = mysqli_query($conn, $viewSpecificData);
 while ($row = mysqli_fetch_assoc($viewSpecificResult)) { 
  $id = $row['id'];
  $username= $row['username'];
  $email= $row['email'];
  $phone= $row['phone'];
 }
 $flag = 1;
}
?>
<!-- Registration form with already filled data for updation -->
<html>
  <div class="register-container">
    <form action="editaction.php" method="POST">
      <h2>Register Form</h2>
      <div class="input-container">
        <i class="fa fa-user icon"></i>
        <input class="input-field" type="text" placeholder="Username" name="username" id="username" value="<?php echo $username;?>">
      </div>
      <div class="input-container">
        <i class="fa fa-envelope icon"></i>
        <input class="input-field" type="text" placeholder="Email" name="email" id="email" value="<?php echo $email;?>">
      </div>
      <div class="input-container">
        <i class="fa fa-phone icon"></i>
        <input class="input-field" type="tel" placeholder="Phone number" name="phone" id="phone"value="<?php echo $phone;?>">
      </div>
      <button type="submit" class="btn">Edit</button>
      <input type="hidden" name="flag" value="<?php echo $flag;?>"></p>
      <input type="hidden" name="id" value="<?php echo $id;?>"></p>
    </form>
  </div>
</html>
<?php include 'footer.php';?>



                
            

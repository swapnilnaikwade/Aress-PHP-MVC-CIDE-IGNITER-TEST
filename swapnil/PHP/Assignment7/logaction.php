<?php include 'header.php'?>
<?php include 'connection.php'?>
<?php
error_reporting(0);
$email =trim($_POST['email']);
$password =trim(md5($_POST['password']));

 //if User details through login is not empty
 if (!empty($email) && !empty($password))
 {
 //look up for user details on the database
  $query = "SELECT * FROM users WHERE email ='$email' AND password = '$password' ";
  $data = mysqli_query($conn, $query);
  $result = mysqli_num_rows($data);
  if ($result == 1) {
   //The log in has found the user
   $rows = mysqli_fetch_array($data);
  echo "LOGIN Successfull..........!!";
  $_SESSION['status'] = 1;
  } else {
   //the user name or password are incorrect
   echo "Wrong user email and password";
   $Message = urlencode("Some error occured please try after some time ");
  header("Location:login.php?Message=".$Message);
  }
 }
 else{
  echo ' You must enter the user email and user password';
 } 
 ?>
 <html>
   <body>
     <table align="center" cellspacing = "0" cellpadding = "3" border = "1" width="70%" >
        <tr>
            <th colspan="7"><h2>Users</h2></th>
        </tr>
        <tr>
            <th> ID </th>
            <th> username </th>
            <th> Email </th>
            <th> Password </th>
            <th> Phone Number </th>
            <th> profile </th>
            <th> Edit </th>
        </tr>
      <?php

    $email=$_POST['email'];
    $viewData = "SELECT * FROM users where email='$email'";

  
    $viewResult = mysqli_query($conn,"$viewData");
    $result  = mysqli_num_rows($viewResult);

    if (mysqli_num_rows($viewResult) > 0) {
    // output data of each row
    while($rows = mysqli_fetch_assoc($viewResult)) {
    ?>
    <col width="50">
    <col width="90">
    <col width="150">
    <col width="100">
    <col width="140">
    <col width="150">
    <col width="150">

    <tr>
      <td><?php echo $rows['id']; ?></td>
      <td><?php echo $rows['username']; ?></td>
      <td><?php echo $rows['email']; ?></td>
      <td><?php echo $rows['password']; ?></td>
      <td><?php echo $rows['phone']; ?></td>
      <td height="100"><?php echo '<img src=  "upload/" ."data:image/jpeg;base64,'.base64_encode( $rows['profile_image'] ).'"/>';?></td>
    <!-- <td height="100"><img src= "upload/" .<?php echo $rows["profile_image"];?> ></td> -->
    <td><a href="<?php echo 'edit.php?id='.$rows['id'] ?>">Edit Profile</a></td>
  </tr>
<?php
}
    }

mysqli_close($conn);
?>
</table>
</body>
</html>

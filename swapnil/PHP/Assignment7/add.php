<?php include 'header.php'?>
<?php include 'connection.php'?>

<!-- Fiendlist page -->
<html>
  <body>
    <table align="center" cellspacing = "0" cellpadding = "1" border = "1" width="50%" >
    <tr>
      <th colspan="3">
        <h2>Users</h2>
      </th>
    </tr>
    <tr>
      <th> ID </th>
      <th> Username </th>
      <th> Friends </th>
    </tr>
<?php
// Show all users except the logged in user
  $email=$_POST['email'];
  $viewData = "SELECT * FROM users where email <> '$email'";
  $viewResult = mysqli_query($conn,"$viewData");
  $result  = mysqli_num_rows($viewResult);
   if (mysqli_num_rows($viewResult) > 0) {
    while($rows = mysqli_fetch_assoc($viewResult)) {
?>
      <col width="90">
      <col width="90">
      <col width="150">
    <tr>
      <td><?php echo $rows['id']; ?></td>
      <td><?php echo $rows['username']; ?></td>
      <td><a href="<?php echo 'addaction.php?id='.$rows['id'] ?>">Add Friend</a></td>
    </tr>
<?php
}
}
mysqli_close($conn);
?>
</table>
</body>
</html>

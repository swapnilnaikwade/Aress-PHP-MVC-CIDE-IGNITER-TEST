<?php include 'header.php'?>
<?php include 'connection.php'?>
<!-- After clicking on Add friend show profile of that user -->
 <html>
   <body>
     <table align="center" cellspacing = "0" cellpadding = "3" border = "1" >
        <tr>
            <th colspan="6"><h2>Friend</h2></th>
        </tr>
        <tr>
            <th> ID </th>
            <th> username </th>
            <th> Email </th>
            <th> Password </th>
            <th> Phone Number </th>
            <th> profile </th>
        </tr>
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
  </tr>
  </table>
</body>
</html>
<?php
  if($_GET){
    // Get profile of user whose id is selected
    $viewData = "SELECT * FROM users where id = ".$_GET['id'];;
    $viewResult = mysqli_query($conn,"$viewData");
    $result  = mysqli_num_rows($viewResult);
    if (mysqli_num_rows($viewResult) > 0) {
    while($rows = mysqli_fetch_assoc($viewResult)) {
}
}
}
?>




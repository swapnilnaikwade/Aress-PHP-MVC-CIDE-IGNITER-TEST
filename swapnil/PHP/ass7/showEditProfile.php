<?php
include 'header.php';
include 'connectdb.php'; 
$id = $_GET['id'];
if($id==true){
  
}else{
    header('location:login.php');
}
$query= "SELECT * FROM staff WHERE id='$id' ";
$data= mysqli_query($cid, $query);
$result= mysqli_fetch_assoc($data);
?>

<div class="container">
  <h2>User Profile</h2>
  <div class="card" style="width:400px">
    <img class="card-img-top" src="<?php echo  $result['picture']; ?>" alt="Card image" style="width:50%">
    <div class="card-body">
      <h4 class="card-title"><?php echo $result['firstName']."<br>".$result['lastName']."<br>"; ?></h4>
      <p class="card-text"><?php echo $result['email']; ?></p>
      <a href="<?php echo 'editProfile.php?id='.$result['id'] ?>" class="btn btn-primary" >Edit Profile</a>

    </div>
  </div>
  </div>

  <?php
include 'footer.php';
?>
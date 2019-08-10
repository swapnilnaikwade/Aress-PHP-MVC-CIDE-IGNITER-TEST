<?php/*
if($_GET)
{
	//View data from database
	$viewSpecificData = "SELECT * FROM links WHERE id = ".$_GET['id'];
	$viewSpecificResult = mysqli_query($cid,"$viewSpecificData");
	while ($row = mysqli_fetch_assoc($viewSpecificResult)) { 
		$linksId = $row['id'];
		$linksSiteName= $row['sitename'];
		$linksSiteUrl= $row['siteurl'];
		$linksSiteDescription= $row['description'];
		$linksSiteCategory= $row['category'];
	}
	
}*/
?>


<?php
include 'header.php';
include 'connectdb.php'; 
include 'left.php'; 
$userEmail = $_SESSION['user_email'];
if($userEmail==true){
  
}else{
    header('location:login.php');
}

$query= "SELECT * FROM staff WHERE email <>'$userEmail' ";
$result= mysqli_query($cid, $query);
?>
   <div class="container">
        <h2>Friends List</h2>           
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Add Friend</th>
            </tr>
            </thead>
            <?php
           while ($row= mysqli_fetch_assoc($result)) { 
            ?>
            <tr>
                <td><?php echo $row['firstName']; ?></td>
                <td><?php echo $row['lastName']; ?></td>
                <td><a href="<?php echo 'friendProfile.php?id='.$row['id'] ?>">Add Friend</a></a>&nbsp;
            </tr>
            <?php
        }
        mysqli_close($conn);
     ?>
</table>
</div>
  <?php
include 'footer.php';
?>
	
   <?php include 'dbconnection.php';?>
   <?php
    if($_GET){
			$deleteData = " DELETE FROM images WHERE id = ".$_GET['id'];
			$deleteResult = mysqli_query($cid, $deleteData);
			if (!$deleteResult) { 
			echo("ERROR: " . mysqli_error() . "\n$deleteResult\n"); 
			}
header('location:display.php');
			echo ("Data is deleted successfully.\n");
		}
    
    
    ?>
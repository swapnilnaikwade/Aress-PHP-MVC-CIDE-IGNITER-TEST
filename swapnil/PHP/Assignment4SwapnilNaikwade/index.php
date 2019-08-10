<?php include 'header.php';?>
<html>
   <body>

<?php

	$usr = "root";
	$pwd = "";
	$db = "linksdb";
	$host = "localhost";
	// Create connection
	$cid = mysqli_connect($host,$usr,$pwd,$db);
	if (!$cid) {
					die("ERROR: " . mysqli_connect_error() . "\n");
	} 
	 ?>
     <form action="addimage.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="file" /> 
        <input type="submit" name="submit" value="Add Image" />
		</form> 
	 <html>
	   <body>
		 <div class="tableContent">
			<div class="row">
				<h2 style='text-align:center'>Image Management </h2>
			<div class="col-md-9">
				<div class="col-md-6"> ID </div>
				<div class="col-md-6"> Image </div>
			</div>
			
		  <?php
	
		$viewData = "SELECT * FROM images ";
	
		$viewResult = mysqli_query($cid,"$viewData");
		$result  = mysqli_num_rows($viewResult);
	
		if (mysqli_num_rows($viewResult) > 0) {
		// output data of each row
		while($rows = mysqli_fetch_assoc($viewResult)) {
		?>
		
		<div class="col-md-9">
		  <div class="col-md-6"><?php echo $rows['id']; ?></div>
		  <div class="col-md-6"><?php  echo "<img src='".$rows['img']."' />";?></div>
		</div>
		<div class="col-md-3">
		  <a class="btn btn-success" href="<?php echo 'editimage.php?id='.$rows['id']; ?>">Edit </a><br /><br />
          <a class="btn btn-danger" href="<?php echo 'deleteimage.php?id='.$rows['id']; ?>">Delete </a>
          <a class="btn btn-danger" href="<?php echo 'carousel.php';?>">Delete </a>
		  </div>
		  </div>
	  
	<?php
	}
	}
	mysqli_close($cid);
	?>
</div>
    
	</body>
	</html>
	

















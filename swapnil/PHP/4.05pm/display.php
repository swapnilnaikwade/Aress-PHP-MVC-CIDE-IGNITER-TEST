<?php include 'header.php';?>
<?php include 'dbconnection.php';?>
<html>
 <body>
<div class="content">
     <form action="addimage.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="file" /> <br />
		<input class="btn btn-primary" type="submit" name="submit" value="Add Image" />
	
		</form> 
</div>
	 <html>
	   <body>
	   <div class="tableContent">
	        <div class="row">
				<h2 >Image Management </h2>
			<div class="col-md-9">
				<div class="col-md-6"> ID </div>
				<div class="col-md-6"> Image </div>
			</div>
			</div>
</div>
 <?php
		$viewData = "SELECT * FROM images ";
		$viewResult = mysqli_query($cid,"$viewData");
		$result  = mysqli_num_rows($viewResult);
		if (mysqli_num_rows($viewResult) > 0) {
		// output data of each row
		while($rows = mysqli_fetch_assoc($viewResult)) {
		?>
		<div class="tableContent">
		<div class="row">
			<div class="col-md-9">
			<div class="col-md-6"><?php echo $rows['id']; ?></div>
			<div class="col-md-6"><?php  echo "<img src='".$rows['img']."' />";?></div>
			</div>
		<div class="col-md-3">
		  <a class="btn btn-success" href="<?php echo 'editimage.php?id='.$rows['id']; ?>">Edit </a><br /><br />
      
		  <form action="deleteimage.php" method="post" enctype="multipart/form-data">
		<input type='hidden' name='file_name' value="<?php echo $rows['img'];?>">
		<input class="btn btn-danger"  type="submit" name="submit" value="Delete" />
		<input type="hidden" name='id' value="<?php echo $rows['id'];?>">
		</form> 

		</div>
		  </div>
	  </div>
	<?php
	}
	}
	mysqli_close($cid);
	?>
	</body>
	</html>
	<?php include 'footer.php';?>

















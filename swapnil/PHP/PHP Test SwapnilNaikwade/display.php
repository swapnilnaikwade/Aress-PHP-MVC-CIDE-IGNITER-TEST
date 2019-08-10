<?php include 'header.php';?>
<?php include 'dbconnection.php';?>
<html>
   <body>
	<nav class ="upload">
    		 <form action="addimage.php" method="post" enctype="multipart/form-data" class="form"><br /><br />
     		   <input type="file" name="file" id="file"><br />
			   <input class="btn btn-primary" type="submit" name="submit" value="Add Image" />
			 </form> 
	</nav>	   
 <div class="text-center tableContent" >
	 	<div  class="row rowcontent">
            <div class= "col-md-12" colspan="4"><h2>Image Management </h2></div>
        </div>
		  <div class ="row rowcontent">
		  <div class ="col-md-2"> <strong> ID </strong></div>
		  <div class ="col-md-5"> <strong> Images </strong></div>     
		  <div class ="col-md-5"> <strong>  Operations </strong></div>     
		</div>  	
	<?php
	//Display all images
		$viewData = "SELECT * FROM images ";
		$viewResult = mysqli_query($cid,"$viewData");
		$result  = mysqli_num_rows($viewResult);
		if (mysqli_num_rows($viewResult) > 0) {
		// output data of each row
		while($rows = mysqli_fetch_assoc($viewResult)) {
		?>
		<div class="row rowcontent">
		<div class ="col-md-2"><?php echo $rows['id']; ?></div>
        <div class ="col-md-5"><?php  echo "<img src='".$rows['img']."' />";?></div>
        <div class ="col-md-5"><a class="btn btn-success" href="<?php echo 'editimage.php?id='.$rows['id']; ?>">Edit </a></div>
		<form action="deleteimage.php" method="post" enctype="multipart/form-data">
			<input type='hidden' name='file_name' value="<?php echo $rows['img'];?>">
			<input class="btn btn-danger"  type="submit" name="submit" value="Delete" />
			<input type="hidden" name='id' value="<?php echo $rows['id'];?>">
		</form> 
	</div>
		  
	<?php
	}
	}
	mysqli_close($cid);
	?>
 </div>
 </body>
 </html>
 <?php include 'footer.php';?>

















<head>
  <!--Bootstrap CSS-->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
        <!--Custom CSS-->
    <link href="assets/css/master.css" rel="stylesheet">
</head>
<?php 
include 'header.php';
$insertId= $_GET['id'];
?>

 <form  method="post" action="imageDB.php" enctype="multipart/form-data">
		 <label for="file">Upload Image:</label>
       <div class="file-upload">
         <input type="file" name="file" id="file"/>
         <input type="hidden" name="insertId" id="insertId" value="<?php echo $insertId; ?>"/>
       </div>
       <div class="file-uploads">
         <input type="submit" name="upload" value="upload" />
         </div>
</form>


	
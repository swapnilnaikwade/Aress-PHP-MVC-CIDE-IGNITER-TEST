<?php include 'header.php';?>
<?php include 'dbconnection.php';?>
<html lang="en">
<head>
	<link rel="icon" href="assets/images/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900" rel="stylesheet" type="text/css">
	<link href="assets/css/master.css" rel="stylesheet">	
	<link href="assets/css/bootstrap.css" rel="stylesheet">
	<link href="assets/css/font-awesome.css" rel="stylesheet">

</head>
<body>


<div class="bs-example">
    <div id="carousel-example-captions" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
<?php
    $counter = 1;
    $viewData = "SELECT * FROM images ";
    $viewResult = mysqli_query($cid,"$viewData");
    while($rows = mysqli_fetch_assoc($viewResult)) {
?>
            <div class="item<?php if($counter <= 1){echo " active"; } ?>">
                <a href="">
                    <img data-src="holder.js/900x800/auto/#777:#777" style="height: 620px; width: 1700px;" alt="First slide image" <?php  echo "<img src='".$rows['img']."' />";?>
                </a>
               
            </div>
<?php
    $counter++;
    }
   
?>
<a class="left carousel-control" href="#carousel-example-captions" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-captions" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
		
        <ol class="carousel-indicators">
           <li data-target="#carousel-example-captions" data-slide-to="0" class="active"></li>
           <li data-target="#carousel-example-captions" data-slide-to="1"></li>
           <li data-target="#carousel-example-captions" data-slide-to="2"></li>
        </ol>
    </div>
</div>
<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
</body>
</html>
<?php include 'footer.php';?>
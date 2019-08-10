<?php
	$usr = "root";
	$pwd = "";
	$db = "assignment7";
	$host = "localhost";

	// Create connection
	$cid = mysqli_connect($host,$usr,$pwd,$db);

	// Check connection
	if (!$cid) { 
		die("ERROR: " . mysqli_connect_error() . "\n"); 
	}
	session_start();
	$linksId = $_SESSION["id"];
?>

<html>
	<?php include('header.php'); ?>
	<body>
		<div class="container clearfix">
			<div class="resultBox assignments">
			<?php if(@$_SESSION["logged_in"] == 1){?>
				<div class="boxInner1 border">
					<h2 class="text-center"><span>User Profile</span></h2><br>
				</div>
				<div class="row grey p10 m100">
					<div class="col-lg-12">
						<?php
							if ( isset($_GET['id']))
								{
									$getId = $_GET['id'];
									$checkData = " SELECT *FROM profile WHERE id =  $getId";
									$checkResult = mysqli_query($cid,"$checkData");
									if (!$checkResult) { 
										echo("ERROR: " . mysqli_error() . "\n$checkData\n"); 	
									}else
									{		
										$table = '';
										$table = '<table cellspacing = "0" cellpadding = "5" border = "1" width="100%"><tr><th>Id</th><th>Profile Picture</th><th>Name</th><th>Contact</th><th>Mail</th><th>address</th></tr>'; 
									
										while ($row = mysqli_fetch_assoc($checkResult)) { 
										
											$linksId = $row['id'];
											$nameLink = $row['name'];
											$contactLink = $row['contact'];
											$mailLink = $row['mail'];
											$addressLink = $row['address'];
											
											$table .= '<tr><td>'.$linksId.'</td>';
											$table .= "<td>	<img class='profilepic' src='profilePictures/$linksId.jpg'></td>";
											$table .= '<td>'.$nameLink.'</td>';
											$table .= '<td>'.$contactLink.'</td>';
											$table .= '<td>'.$mailLink.'</td>';
											$table .= '<td>'.$addressLink.'</td></tr>';
										}
										$table .= '</table>';
										echo $table;
									}
								}
						?>	
							
					</div>
				</div>
				<?php }else{ ?>
				<div class="boxInner1 border">
					<h2 class="text-center"><span>Please login</span></h2><br>						
				</div>	
				<?php } ?>
			</div>
		</div>
		<?php include('footer.php'); ?>
	</body>
</html>
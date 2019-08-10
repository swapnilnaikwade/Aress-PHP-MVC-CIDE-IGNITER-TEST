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
if (array_key_exists('id', $_SESSION)) {
$linksId = $_SESSION["id"];
}
?>


<html>
	<?php include('header.php'); ?>
	<body>
		<div class="container clearfix">
			<div class="resultBox assignments">
			 <?php if(@$_SESSION["logged_in"] == 1){?>
				<div class="boxInner1 border">
					<h2 class="text-center"><span>User Details</span></h2><br>
				</div>
				<div class="row grey p10">
					<div class="col-lg-12 m100">
						<?php
							$flag = 0;
							$myId[]='';
							$myFriend[]='';

							$checkData = " SELECT * FROM profile WHERE NOT id = $linksId; ";
							$checkResult = mysqli_query($cid,"$checkData");
							
							$checkDataFriend = "SELECT * FROM friends where myid = $linksId";
							$checkResultFriend = mysqli_query($cid,"$checkDataFriend");
							
							while($rowNew = mysqli_fetch_array($checkResultFriend)) {
								$myId[] = $rowNew['myid'];
								$myFriend[] = $rowNew['friendid'];
							}

							if ( isset($_GET['friend']) && $_GET['friend'] == 1 )
								{
									echo ("Added as friend.");
								}	
							
							if (!$checkResult) { 
									echo("ERROR: " . mysqli_error() . "\n$checkData\n"); 	
							}else
							{	
								if ($_SERVER['REQUEST_METHOD'] == "POST") 
								{
									if($_POST['flag'] == 1) {
										$friendId = $_POST['friendId'];
										///Write a function to check the existance of friend
										
										if(in_array($linksId,$myId) && in_array($friendId,$myFriend)) 
										 {}
										else{
											$insertData = " INSERT INTO friends (myid,friendid) VALUES ($linksId, $friendId) ";
											$insertResult = mysqli_query($cid,"$insertData");
											$insertDataReverse = " INSERT INTO friends (myid,friendid) VALUES ($friendId, $linksId) ";
											$insertResultReverse = mysqli_query($cid,"$insertDataReverse");
											
											if (!$insertResult || !$insertResultReverse) { 
											echo("ERROR: " . mysqli_error() . "\n$insertData\n"); 
											}
											header("location: userDetails.php?friend=1");
										}
									}
								} 
								
								$table = '';
								$table = "<table cellspacing = '0' cellpadding = '5' border = '1' width='100%'><tr><th>Id</th><th>Name</th><th>View Profile</th><th>Add Friend</th></tr>"; 

								while ($row = mysqli_fetch_array($checkResult)) 
								{ 
									$userId = $row['id'];
									$nameLink = $row['name'];
									
									$table .= '<tr><td>'.$userId.'</td>';
									$table .= '<td>'.$nameLink.'</td>';
									$table .= '<td><a href="viewProfile.php?id='.$row['id'].'">View Profile</a></td>';
									$flagfriend = 0;

									//if(in_array($userId,$myFriend) && in_array($linksId,$myId)) {
									if(in_array($userId, $myFriend)) {	
										$table .= '<td>You are friends.</td></tr>';	
									}	
									else {
										$table .= '<td><form method="post" action="userDetails.php">
										<input type="submit" value="Add friend"/>
										<input type="hidden" name="friendId" value="'.$userId.'"/>
										<input type="hidden" name="flag" value="1"/>
										</form></td></tr>';
									}	 						
								}
								$table .= '</table>';
								echo $table;	
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
<?php
 function customError($errno, $errstr)
  {
  echo "<b>Error:</b> [$errno] $errstr";
  }

//set error handler
set_error_handler("customError");
 
$file = fopen('filename.txt','a');

$usr = "root";
$pwd = "";
$db = "linksdb";
$host = "localhost";

// Create connection
$cid = mysqli_connect($host,$usr,$pwd,$db);
//echo ($cid);
//echo '<br/>';
// Check connection
if (!$cid) { 
	trigger_error("ERROR: " . mysqli_connect_error() . "\n"); 
	fwrite($file, "ERROR: " . mysqli_connect_error() . "\n");
} else {
	echo "Connected successfully<br/><br/>";
	fwrite($file, "Connected successfully.");
}


//Set the variable to null

$linksId = '';
$linksSiteName= '';
$linksSiteUrl= 'http://';
$linksSiteDescription= '';
$linksSiteCategory= '';
$flag = 0;

//IF there is post then insert data.
if ($_SERVER['REQUEST_METHOD'] == "POST") { 

	// the following 4 lines are needed if your server has register_globals set to Off
	$category = $_POST['category'];
	$sitename = $_POST['sitename'];
	$siteurl = $_POST['siteurl'];
	$description = $_POST['description'];
	$linksId = $_POST['id'];
	$flag = $_POST['flag'];
	
	if($flag == 2)	{
		if($linksId != '') {
			$deleteData = " DELETE FROM links WHERE id = $linksId";
			$deleteResult = mysqli_query($cid, $deleteData);
			if (!$deleteResult) { 
			echo("ERROR: " . mysqli_error() . "\n$deleteResult\n"); 
			}

			echo ("Data is deleted successfully.\n");
		}
	}	else if($flag == 1) {
		$updateData = " UPDATE links SET category = '$category', sitename = '$sitename', 
		siteurl = '$siteurl', description = '$description' WHERE id = $linksId";
		$updateResult = mysqli_query($cid,"$updateData");
		if (!$updateResult) { 
		echo("ERROR: " . mysqli_error() . "\n$updateResult\n"); 
		}

		echo ("Data is updated successfully.\n");
		
	} 	else {
		$insertData = " INSERT INTO links (category, sitename, siteurl, description) VALUES ('$category', '$sitename','$siteurl','$description') ";
		$insertResult = mysqli_query($cid,"$insertData");
		
		if (!$insertResult) { 
		echo("ERROR: " . mysqli_error() . "\n$insertData\n"); 
		}

		echo ("Data is inserted successfully.\n");
	}
} 

//View data from database
$viewData = "SELECT * FROM links WHERE category = 'Animal'";
$viewResult = mysqli_query($cid,"$viewData");

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
	$flag = 1;
}


$table = '';
$table = '<table cellspacing = "0" cellpadding = "5" border = "1" width="100%"  ><tr><th>Sitename</th><th>SiteURL</th><th>SiteDescription</th><th>SiteCategory</th><th>Actions</th></tr>';
while ($row = mysqli_fetch_assoc($viewResult)) { 
	
	$table .= '<tr><td>'.$row['sitename'].'</td>';	
	$table .= '<td>'.$row['siteurl'].'</td>';
	$table .= '<td>'.$row['description'].'</td>';
	$table .= '<td>'.$row['category'].'</td>';
	$table .= '<td><a href="?id='.$row['id'].'">Edit</a>&nbsp;
	<form method="post" action="">
		<input type="submit" value="Delete"/>
		<input type="hidden" name="id" value="'.$row['id'].'"/>
		<input type="hidden" name="flag" value="2"/>
	</form></td></tr>';
	
}
$table .= '</table>';

echo $table;	
mysqli_close($cid); 


?> 
<br/>
<form name="fa" action="" method="post">
	<p><b>Category: </b> 
		<input type="text" name="category" size=40 value="<?php echo $linksSiteCategory;?>"> </p>
	<p><b>Site Name:</b> 
		<input type="text" name="sitename" size=40 value="<?php echo $linksSiteName;?>"></p>
	<p><b>Site URL: </b> 
		<input type="text" name="siteurl" size=40 value="<?php echo $linksSiteUrl;?>"></p>
	<p><b>Description: </b> 
		<textarea name="description" rows=5 cols=40><?php echo $linksSiteDescription;?></textarea></p>
		<input type="hidden" name="flag" value="<?php echo $flag;?>"></p>
		<input type="hidden" name="id" value="<?php echo $linksId;?>"></p>
		
	<p><input type="submit" value="Submit"></p>
</form>

<?php fclose($file); ?>
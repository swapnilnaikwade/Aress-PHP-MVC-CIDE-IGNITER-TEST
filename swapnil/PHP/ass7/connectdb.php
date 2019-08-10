<?php
//$file = fopen('filename.txt','a');

$usr = "root";
$pwd = "";
$db = "employees";
$host = "localhost";

// Create connection
$cid = mysqli_connect($host,$usr,$pwd,$db);
//echo ($cid);
//echo '<br/>';
// Check connection
if (!$cid) { 
	trigger_error("ERROR: " . mysqli_connect_error() . "\n"); 
	//fwrite($file, "ERROR: " . mysqli_connect_error() . "\n");
} else {
	//echo "Connected successfully<br/><br/>";
	//fwrite($file, "Connected successfully.");
}



?>
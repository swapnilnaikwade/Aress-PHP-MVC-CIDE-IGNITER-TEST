<?php
$usr = "root";
$pwd = "";
$db = "userdb";
$host = "localhost";

// Create connection
$conn = mysqli_connect($host,$usr,$pwd,$db);
if (!$conn){
           die("ERROR: " . mysqli_connect_error() . "<br>");
}
?>
<?php 
 $usr = "root";
 $pwd = "";
 //Database Name
 $db = "linksdb";
 $host = "localhost";
 //Connection to Database
 $cid = mysqli_connect($host,$usr,$pwd,$db);
 if (!$cid) {
   die("ERROR: " . mysqli_connect_error() . "\n");
 }
 ?>
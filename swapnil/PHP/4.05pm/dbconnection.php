<?php 
 $usr = "root";
 $pwd = "";
 $db = "linksdb";
 $host = "localhost";

 $cid = mysqli_connect($host,$usr,$pwd,$db);
 
 if (!$cid) {
   die("ERROR: " . mysqli_connect_error() . "\n");
 
 }
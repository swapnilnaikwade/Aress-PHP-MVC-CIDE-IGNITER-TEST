<?php

if($_POST)   {
 if($_POST["val1"]!= '') {
   $x=$_POST["val1"];
 } else {
  $x = '';
 }
 if($_POST["val2"]!= '') {
   $y=$_POST["val2"];
 } else {
  $y = '';
 }
 }
echo strcmp("$x","$y");
?>

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


if($_POST["opr"]!= '') {
   $opr1=$_POST["opr"];
 switch($opr1)  
{
   case "==":
  if( $x == $y ) {
  echo "$x and $y is equal";
}
else {
  echo "$x is not equal to $y";
}
break;
  
case ">":
 if( $x > $y ) {
  echo "$x is greater than $y";
}
else {
  echo "$y is greater than $x";
}
break;  
   case ">=":
  if( $x >= $y ) {
  echo "$x is greater than equal to $y ";
}
else {
  echo "$y is less than $x";
}
break;  
    case "<=":
  if( $x <= $y ) {
  echo "$y is greater than equal to $x";
}
else {
  echo "$x is less than $y";
}
break;  
}
}
?>
<input type="button" onclick="window.location.href='http://localhost/Assignment2SwapnilNaikwade/index.html'" value="Go Back"/>
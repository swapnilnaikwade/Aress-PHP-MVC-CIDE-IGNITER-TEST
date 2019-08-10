
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

 if($_POST["opr"]!= '') {
   $opr1=$_POST["opr"];
    switch($opr1)
  {
   case "+": echo  $x+$y;
      break;
   case "-": echo  $x-$y;
      break;
   case "*": echo  $x*$y;
      break;  
   case "/": echo  $x/$y;
      break;  
   case "%": echo  $x%$y;
      break;
  }
 } else {
    
  $opr1 = '';
  
 }
} ?>
    <input type="button" onclick="window.location.href='http://localhost/Assignment2SwapnilNaikwade/index.html'" value="Go Back"/>
 

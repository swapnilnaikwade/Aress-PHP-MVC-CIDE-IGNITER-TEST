<head>
  <title>PHP</title>
<head>
<body>

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
  switch($_POST["opr"])
  {
   case "&&":
   
   if( $x && $y ==1) {
  echo "1";
}
else {
  echo "0";
}
    break;
   case "||": echo  $x||$y;
      break;
   case "!": 
   
    if( !$x ==1) {
  echo "1";
}
else {
  echo "0";
}
   break;  
  }
}
 ?>
 <input type="button" onclick="window.location.href='http://localhost/Assignment2SwapnilNaikwade/index.html'" value="Go Back"/>
</body>
</html>
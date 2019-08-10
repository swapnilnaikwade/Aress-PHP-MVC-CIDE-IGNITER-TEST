<?php

if(!empty($_POST["remember"])) {
 setcookie ("email",$_POST["email"], time() + (86400 * 30));
 setcookie ("pass",$_POST["pass"], time() + (86400 * 30));
 echo "Cookies Set Successfuly";

} else {
 setcookie("email","");
 setcookie("pass","");
 echo "Cookies Not Set";
}

?>
<p><a href="index.php"> Go to Login Page </a> </p>
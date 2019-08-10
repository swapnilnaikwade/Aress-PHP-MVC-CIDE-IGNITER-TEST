<?php
$username = "admin";
$pwd = "admin";

if(isset($_SESSION['username'])){
    echo "<h2>welcome ".$_SESSION['username']."</h2>";
    echo "user is login ";
  
    echo "<a href ='logout.php'<input type =button value =logout name=logout></a>";
}else{
    if($_POST['username']==$username && $_POST['pwd']==$pwd){
        $_SESSION['username']=$username;
        echo "<script>location.href='index.php'</script>";
    }
    else{
        echo"user name or pasword is incorrect";
        // echo"<script>location.href='login.php'</script>";
        $error = "Incorrect username or password.";
    }
}

?>
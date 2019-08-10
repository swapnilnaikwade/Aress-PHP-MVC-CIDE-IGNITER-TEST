<?php
error_reporting(0);
if (!empty($_POST["remember"])) {
    if (array_key_exists('isfirstvisit', $_COOKIE)) {
        echo 'second visit';
        setcookie("isfirstvisit", 0, time() + 60);
        setcookie("previousvisit", $_COOKIE['recentvisit'], time() + 60);
        setcookie("recentvisit", time(), time() + 60);
    } else {
        echo 'first visit';
        setcookie("isfirstvisit", 1, time() + 60);
        setcookie("recentvisit", time(), time() + 60);
        setcookie("previousvisit", time(), time() + 60);
    }
    setcookie("username", $_POST["username"], time() + 60);
    setcookie("password", $_POST["password"], time() + 60);
    echo "Cookies Set Successfuly" . "<br>";
    echo "Username: " . $_POST["username"] . "<br>";
    echo "Password: " . $_POST["password"] . "<br>";
    echo "Previous Visit: " . $_COOKIE['previousvisit'] . "<br>";
    echo "Recent Visit: " . $_COOKIE['recentvisit'] . "<br>";
} else {
    setcookie("username", "");
    setcookie("password", "");
    echo "Cookies Not Set";
}
?>
<p><a href="page1.php"> Go to Login Page </a> </p>
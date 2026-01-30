<?php

session_start();
session_destroy();
if(isset($_COOKIE['user'])){
    setcookie("user", "", time() - 3600);
}
header("Location: LogIn.php");
exit();

session_start();
session_destroy();
header("Location: login.php");
exit();


?>
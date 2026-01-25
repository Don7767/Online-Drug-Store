<?php

session_start();
session_destroy();
if(isset($_COOKIE['user'])){
    setcookie("user", "", time() - (30*24*60*60));
}
header("Location: LogIn.php");
exit();

?>
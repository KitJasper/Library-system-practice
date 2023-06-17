<?php
if (session_status() === PHP_SESSION_NONE) 
{
    session_start();
}
if(isset($_SESSION['userID']))
{
    unset($_SESSION['userID']);
}
//logs out the current session 
header("Location: login.php");
die;
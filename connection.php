<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpassword = "";
    $dbname = "library";

    if(!$con = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname))
    {
        die("Failed to Connect");
    }
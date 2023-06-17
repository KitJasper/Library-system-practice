<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include("connection.php");
include("functions.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Signup Page</title>
    <link rel="stylesheet" href="files/pay.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <div class="header">
        <nav class="navbar">
            <div class="logo">
                <img src="files/logo-no-background.png" alt="image" style="width: 80px;">
            </div>
            <ul class="list">
                <li class="list-items"><a class="active" href="index.php"><span alt="home" class="material-symbols-rounded"
                            style="vertical-align: -6px;font-size:30px;">Home</span>&nbspHome</a></li>
                <li class="list-items"><a href="#"><span alt="Search" class="material-symbols-rounded"
                            style="vertical-align: -6px;font-size:30px;">search</span>&nbspSearch</a></li>
                <li class="list-items"><a href="#"><span alt="Profile" class="material-symbols-rounded"
                            style="vertical-align: -6px;font-size:30px;">person</span>&nbspProfile</a></li>
            </ul>
            <div class="menu"><a href="#"><span class="material-symbols-rounded"
                        style="vertical-align: -6px;font-size:30px;">menu</span></a></div>
        </nav>
    </div>
    <div class="body">
        <div class="wrapper">
            <div class="right">
                <h1>Payment for fines</h1>
                <div class="form">
                    <form method="post">
                        <div class="in">
                                <div class="in1">
                                    <label for="username"><span class="material-symbols-rounded"
                                            style="vertical-align:-6px;font-size:27px;">account_circle</span></label>
                                    <input type="text" class="a input" placeholder="Amount" name="username"
                                        required>
                                    <br>
                                </div>
                                <span class="focus-border"></span>
                                <div class="in2">
                                    <label for="password"><span class="material-symbols-rounded"
                                            style="vertical-align:-6px;font-size:27px;">lock</span></label>
                                    <input type="text" class="b input" placeholder="Authorize Payment by Password" name="password"
                                        required>
                                    <span class="focus-border"></span>
                                    <br>
                                </div>
                                <span class="focus-border"></span>
                            <br>
                            <button type="submit" name="login" value="signup" class="btn btn-primary"><span
                                    class="glyphicon glyphicon-floppy-disk"></span><strong>Pay</strong></button>
                        </div>
                    </form>
                    <h5 class="reg">Go back to login page <a href="index.php">Here</a></h5>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
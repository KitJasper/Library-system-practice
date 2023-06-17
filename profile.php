<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include("connection.php");
include("functions.php");
$user_data = check_login($con);
$data = fetchMemberData($con, $user_data['id']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Profile</title>
    <link rel="stylesheet" href="files/profile.css">
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
                <li class="list-items"><a href="#"><span alt="Profile" class="material-symbols-rounded"
                            style="vertical-align: -6px;font-size:30px;">person</span>&nbspProfile</a></li>
                <li class="list-items"><a href="login.php"><span alt="Logout" class="material-symbols-rounded"
                            style="vertical-align: -6px;font-size:30px;">logout</span>&nbspLogout</a></li>
            </ul>
            <div class="menu"><a href="#"><span class="material-symbols-rounded"
                        style="vertical-align: -6px;font-size:30px;">menu</span></a></div>
        </nav>
    </div>
    <div class="body">
        <div class="wrapper">
            <div class="right">
                <h1>User Profile</h1>
                <div class="form">
                    <form method="post">
                        <div class="in">
                                <div class="in1">
                                <label for="ID">ID:</label>
                                <?php echo "<b><label>{$data['id']}</label></b>"?>
                                </div>
                                <div class="in2">
                                <label for="fName">First Name:</label>
                                <?php echo "<b><label>{$data['fName']}</label></b>"?>
                                </div>
                                <div class="in1">
                                <label for="lName">Last Name:</label>
                                <?php echo "<b><label>{$data['lName']}</label></b>"?>
                                </div>
                                <div class="in2">
                                <label for="dateJoined">Date Joined:</label>
                                <?php echo "<b><label>{$data['dateJoined']}</label></b>"?>
                                </div>
                                <div class="in1">
                                <label for="status">Status:</label>
                                <?php echo "<b><label>{$data['status']}</label></b>"?>
                                </div>
                                <div class="in2">
                                <label for="username">Username:</label>
                                <?php echo "<b><label>{$data['username']}</label></b>"?>
                                </div>
                                <div class="in1">
                                <label for="password">Password:</label>
                                <?php echo "<b><label>{$data['password']}</label></b>"?>
                                </div>
                                <div class="in2">
                                <label for="fine">Unpaid Fine:</label>
                                <?php echo !$data['fineAmount'] ? "<b><label>None</b></label>" : "<b><label>{$data['fineAmount']}</label></b>"?>
                                </div>
                                <div class="in1">
                                <label for="fine">Borrowed Book:</label>
                                <?php echo !$data['title'] ? "<b><label>None</b></label>" : "<b><label>{$data['title']}</label></b>"?>
                                </div>
                                <div class="in2">
                                <label for="fine">Borrowed Date:</label>
                                <?php echo !$data['borrowDate'] ? "<b><label>None</b></label>" : "<b><label>{$data['borrowDate']}</label></b>"?>
                                </div>
                        </div>
                    </form>
                    <h5 class="reg">Go back to login page <a href="index.php">Here</a></h5>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
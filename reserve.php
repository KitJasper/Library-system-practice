<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include("connection.php");
include("functions.php");
$user_data = check_login($con);
$books = fetchBooks($con);
$data = fetchMemberData($con, $user_data['id']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Reserve</title>
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
                <li class="list-items"><a href="#profile.php"><span alt="Profile" class="material-symbols-rounded"
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
                <h1>Reserve Book?</h1>
                <div class="form">
                    <form method="post">
                        <div class="in">
                            <?php $book = getBookByIndex($books, 0); ?>
                                <div class="in1">
                                <label for="ID">ID:</label>
                                    <?php echo "<b><label>{$book['id']} </label></b>"?>
                                </div>
                                <div class="in2">
                                <label for="fName">Title:</label>
                                    <?php echo "<b><label>{$book['title']} </label></b>"?>
                                </div>
                                <div class="in1">
                                <label for="lName">Author:</label>
                                    <?php echo "<b><label>{$book['author']} </label></b>"?>
                                </div>
                                <div class="in2">
                                <label for="dateJoined">Year Published:</label>
                                    <?php echo "<b><label>{$book['yearPublished']} </label></b>"?>
                                </div>
                                <div class="in1">
                                <label for="status">Copies:</label>
                                    <?php echo "<b><label>{$book['copies']} </label></b>"?>
                                </div>
                                <div class="in2">
                                <label for="username">User:</label>
                                <?php echo "<b><label>{$data['fName']} {$data['lName']}</label></b>"?>
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
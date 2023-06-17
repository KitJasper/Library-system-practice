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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KDJ's Library</title>
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
                <li class="list-items"><a class="active" href="#"><span alt="home" class="material-symbols-rounded"
                            style="vertical-align: -6px;font-size:30px;">Home</span>&nbspHome</a></li>
                <li class="list-items"><a href="profile.php"><span alt="Profile" class="material-symbols-rounded"
                            style="vertical-align: -6px;font-size:30px;">person</span>&nbspProfile</a></li>
                <li class="list-items"><a href="login.php"><span alt="Logout" class="material-symbols-rounded"
                            style="vertical-align: -6px;font-size:30px;">logout</span>&nbspLogout</a></li>
            </ul>
            <div class="menu"><a href="#"><span class="material-symbols-rounded"
                        style="vertical-align: -6px;font-size:30px;">menu</span></a></div>
        </nav>
    </div>
    <div class="body">
        <div class="top">
            <img src="https://media2.giphy.com/media/JrSwnF7PLhgvmNfM8C/giphy.gif?cid=6c09b952a36f6fb33cc22e69d06759adb994b66eab493c4a&ep=v1_internal_gifs_gifId&rid=giphy.gif&ct=g"
                alt="" class="background">
            <div class="text">
                <h3>Welcome <?php echo $data['fName'];?>!</h3>
                <h1><b>KDJ's Library</b></h1>
                <h6>Discover the possibilities</h6>
            </div>
        </div>
        <div class="bottom">
            <div class="btn-group" style="width:100%;">
                <button onclick="window.location.href='book.php';">BOOKS</button>
                <button onclick="window.location.href='pay.php';">PAY</button>
            </div>
        </div>
    </div>
</body>
<link rel="stylesheet" href="files/index.css">
<script>
</script>
</html>
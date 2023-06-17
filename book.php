<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include("connection.php");
include("functions.php");
$user_data = check_login($con);
$books = fetchBooks($con);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Books</title>
    <link rel="stylesheet" href="files/book.css">
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
                <li class="list-items"><a class="active" href="index.php"><span alt="home"
                            class="material-symbols-rounded"
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
        <div class="wrapper">
            <div class="right">
                <h1>Books Available</h1>
                <div class="shelf">
                    <div class="row row-1">
                        <div class="column">
                            <div class="card">
                                <?php $book = getBookByIndex($books, 0); ?>
                                <?php if ($book !== null) { ?>
                                    <p><b><?php echo $book['title']; ?></b></p>
                                    <p class="small">Author:<b><?php echo $book['author'];?></b></p>
                                    <p class="small">Year Published: <b><?php echo $book['yearPublished'];?></b></p>
                                    <p class="small">Copies:<b><?php echo $book['copies']; ?></b></p>
                                    <form method="POST">
                                        <input type="button" name="bookID" value="RESERVE" onclick="window.location.href='reserve.php'">
                                <?php } ?>
                            </div>
                        </div>
                        <div class="column">
                            <div class="card">
                                <?php $book = getBookByIndex($books, 1); ?>
                                <?php if ($book !== null) { ?>
                                    <p><b><?php echo $book['title']; ?></b></p>
                                    <p class="small">Author:<b><?php echo $book['author'];?></b></p>
                                    <p class="small">Year Published: <b><?php echo $book['yearPublished'];?></b></p>
                                    <p class="small">Copies:<b><?php echo $book['copies']; ?></b></p>
                                    <form method="POST">
                                        <input type="button" name="bookID" value="RESERVE" onclick="window.location.href='reserve.php'">
                                    </form>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="column">
                            <div class="card">
                                <?php $book = getBookByIndex($books, 2); ?>
                                <?php if ($book !== null) { ?>
                                    <p><b><?php echo $book['title']; ?></b></p>
                                    <p class="small">Author:<b><?php echo $book['author'];?></b></p>
                                    <p class="small">Year Published: <b><?php echo $book['yearPublished'];?></b></p>
                                    <p class="small">Copies:<b><?php echo $book['copies']; ?></b></p>
                                    <form method="POST">
                                        <input type="button" name="bookID" value="RESERVE" onclick="window.location.href='reserve.php'">
                                    </form>
                                <?php } ?>
                            </div>
                        </div>    
                        <div class="column">
                            <div class="card">
                                <?php $book = getBookByIndex($books, 3); ?>
                                <?php if ($book !== null) { ?>
                                    <p><b><?php echo $book['title']; ?></b></p>
                                    <p class="small">Author:<b><?php echo $book['author'];?></b></p>
                                    <p class="small">Year Published: <b><?php echo $book['yearPublished'];?></b></p>
                                    <p class="small">Copies:<b><?php echo $book['copies']; ?></b></p>
                                    <form method="POST">
                                        <input type="button" name="bookID" value="RESERVE" onclick="window.location.href='reserve.php'">
                                    </form>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="row row-2">
                        <div class="column">
                            <div class="card">
                                <?php $book = getBookByIndex($books, 4); ?>
                                <?php if ($book !== null) { ?>
                                    <p><b><?php echo $book['title']; ?></b></p>
                                    <p class="small">Author:<b><?php echo $book['author'];?></b></p>
                                    <p class="small">Year Published: <b><?php echo $book['yearPublished'];?></b></p>
                                    <p class="small">Copies:<b><?php echo $book['copies']; ?></b></p>
                                    <form method="POST">
                                        <input type="button" name="bookID" value="RESERVE" onclick="window.location.href='reserve.php'">
                                    </form>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="column">
                            <div class="card">
                                <?php $book = getBookByIndex($books, 5); ?>
                                <?php if ($book !== null) { ?>
                                    <p><b><?php echo $book['title']; ?></b></p>
                                    <p class="small">Author:<b><?php echo $book['author'];?></b></p>
                                    <p class="small">Year Published: <b><?php echo $book['yearPublished'];?></b></p>
                                    <p class="small">Copies:<b><?php echo $book['copies']; ?></b></p>
                                    <form method="POST">
                                        <input type="button" name="bookID" value="RESERVE" onclick="window.location.href='reserve.php'">
                                    </form>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="column">
                            <div class="card">
                                <?php $book = getBookByIndex($books, 6); ?>
                                <?php if ($book !== null) { ?>
                                    <p><b><?php echo $book['title']; ?></b></p>
                                    <p class="small">Author:<b><?php echo $book['author'];?></b></p>
                                    <p class="small">Year Published: <b><?php echo $book['yearPublished'];?></b></p>
                                    <p class="small">Copies:<b><?php echo $book['copies']; ?></b></p>
                                    <form method="POST">
                                        <input type="button" name="bookID" value="RESERVE" onclick="window.location.href='reserve.php'">
                                    </form>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="column">
                            <div class="card">
                                <?php $book = getBookByIndex($books, 7); ?>
                                <?php if ($book !== null) { ?>
                                    <p><b><?php echo $book['title']; ?></b></p>
                                    <p class="small">Author:<b><?php echo $book['author'];?></b></p>
                                    <p class="small">Year Published: <b><?php echo $book['yearPublished'];?></b></p>
                                    <p class="small">Copies:<b><?php echo $book['copies']; ?></b></p>
                                    <form method="POST">
                                        <input type="button" name="bookID" value="RESERVE" onclick="window.location.href='reserve.php'">
                                    </form>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="row row-3">
                        <div class="column">
                            <div class="card">
                                <?php $book = getBookByIndex($books, 8); ?>
                                <?php if ($book !== null) { ?>
                                    <p><b><?php echo $book['title']; ?></b></p>
                                    <p class="small">Author:<b><?php echo $book['author'];?></b></p>
                                    <p class="small">Year Published: <b><?php echo $book['yearPublished'];?></b></p>
                                    <p class="small">Copies:<b><?php echo $book['copies']; ?></b></p>
                                    <form method="POST">
                                        <input type="button" name="bookID" value="RESERVE" onclick="window.location.href='reserve.php'">
                                    </form>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="column">
                            <div class="card">
                                <?php $book = getBookByIndex($books, 9); ?>
                                <?php if ($book !== null) { ?>
                                    <p><b><?php echo $book['title']; ?></b></p>
                                    <p class="small">Author:<b><?php echo $book['author'];?></b></p>
                                    <p class="small">Year Published: <b><?php echo $book['yearPublished'];?></b></p>
                                    <p class="small">Copies:<b><?php echo $book['copies']; ?></b></p>
                                    <form method="POST">
                                        <input type="button" name="bookID" value="RESERVE" onclick="window.location.href='reserve.php'">
                                    </form>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="column">
                            <div class="card">
                                <?php $book = getBookByIndex($books, 10); ?>
                                <?php if ($book !== null) { ?>
                                    <p><b><?php echo $book['title']; ?></b></p>
                                    <p class="small">Author:<b><?php echo $book['author'];?></b></p>
                                    <p class="small">Year Published: <b><?php echo $book['yearPublished'];?></b></p>
                                    <p class="small">Copies:<b><?php echo $book['copies']; ?></b></p>
                                    <form method="POST">
                                        <input type="button" name="bookID" value="RESERVE" onclick="window.location.href='reserve.php'">
                                    </form>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="column">
                            <div class="card">
                                <?php $book = getBookByIndex($books, 11); ?>
                                <?php if ($book !== null) { ?>
                                    <p><b><?php echo $book['title']; ?></b></p>
                                    <p class="small">Author:<b><?php echo $book['author'];?></b></p>
                                    <p class="small">Year Published: <b><?php echo $book['yearPublished'];?></b></p>
                                    <p class="small">Copies:<b><?php echo $book['copies']; ?></b></p>
                                    <form method="POST">
                                        <input type="button" name="bookID" value="RESERVE" onclick="window.location.href='reserve.php'">
                                    </form>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <h5 class="reg">Go back to login page <a href="index.php">Here</a></h4>
            </div>
        </div>
    </div>
</body>

</html>
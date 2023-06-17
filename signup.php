<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$string = "";
include("connection.php");
include("functions.php");
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //checks whether something is posted
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    //places the "something" that was posted in the variables $username & $password

    if (!empty($username) && !empty($password) && !is_numeric($username))
    //checks whether the username and password is empty
    //checks whether username is not numeric
    {
        $query1 = "SELECT * FROM members WHERE username = '$username' AND password = '$password' limit 1";
        //creates a query if username already exists
        $result = mysqli_query($con, $query1);
        //checks if there's a row matching the uname and password
        //outputs message "Username Already exists"
        if ($result && mysqli_num_rows($result) != 0) 
        {
            $string = "Username \"${username}\" already exists";
        } else {
            //save to database
            $id = random_number(10);
            $query2 = "INSERT INTO members (id, fname, lname, dateJoined, username, password) VALUES('$id','$fname', '$lname', now(), '$username','$password')";
            //create a query to store the inputted information to database

            //inputs the query to the mysql
            //dont forget to create the connection of the query
            mysqli_query($con, $query2);
            //redirect to login page
            $string = "Member added Successfully. Return to Login page";
        }
    } else {
        $string = "Please enter some valid information";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Signup</title>
    <link rel="stylesheet" href="files/signup.css">
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
                <li class="list-items"><a class="active" href="login.php"><span alt="home" class="material-symbols-rounded"
                            style="vertical-align: -6px;font-size:30px;">Home</span>&nbspHome</a></li>
                <li class="list-items"><a href="#"><span alt="Search" class="material-symbols-rounded"
                            style="vertical-align: -6px;font-size:30px;">search</span>&nbspSearch</a></li>
                <li class="list-items"><a href="#"><span alt="Contact" class="material-symbols-rounded"
                            style="vertical-align: -6px;font-size:30px;">call</span>&nbspContact</a></li>
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
                <h1>Sign Up</h1>
                <div class="form">
                    <form method="post">
                        <div class="in">
                                <div class="in1">
                                    <input type="text" class="a input" placeholder="Enter First name" name="fname"
                                        required>
                                    <br>
                                </div>
                                <span class="focus-border"></span>
                                <div class="in2">
                                    <input type="text" class="b input" placeholder="Enter Lastname" name="lname"
                                        required>
                                    <br>
                                </div>
                                <span class="focus-border"></span>
                                <div class="in1">
                                    <input type="text" class="c input" placeholder="Create Username" name="username"
                                        required>
                                    <br>
                                </div>
                                <div class="in2">
                                    <input type="text" class="d input" placeholder="Create Password" name="password"
                                        required>
                                    <br>
                                </div>
                            <br>
                            <div class="echo">
                                <?php echo $string; ?>
                            </div><br>
                            <button type="submit" name="login" value="signup" class="btn btn-primary"><span
                                    class="glyphicon glyphicon-floppy-disk"></span><strong>SIGN UP</strong></button>
                        </div>
                    </form>
                    <h5 class="reg">Go back to login page <a href="index.php">Here</a></h5>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
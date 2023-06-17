<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$string = "";
include("connection.php");
include("functions.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //checks whether something is posted
    $username = $_POST['username'];
    $password = $_POST['password'];
    //places the "something" that was posted in the variables $username & $password

    if(!empty($username) && !empty($password) && !is_numeric($username))
    //checks whether the username and password is empty
    //checks whether username is not numeric
    {
        //read the database
        $query = "SELECT * FROM members WHERE username = '$username' limit 1"; //limit 1 is for when you only want to get 1 result
        //create a query to store the inputted information to database

        //inputs the query to the mysql
        //dont forget to create the connection of the query
        $result = mysqli_query($con, $query);
        if($result) //checks if result is positive
        {
            if($result && mysqli_num_rows($result) > 0) //checks if there is at least 1 result
            {
                //if true we will get the user data
                $user_data = mysqli_fetch_assoc($result);
                if($user_data['password'] === $password)//checks if user poassword is equal in the database
                {
                    //redirect to login page
                    $_SESSION['id'] = $user_data['id']; //assigns the session id to the current user ID 
                    header("Location: index.php");
                    die;
                }
            }
            $string = "Invalid Username or Password";
        }
        
    }
    else
    {
        $string = "Please enter some  valid information";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <link rel="stylesheet" href="files/login.css">
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
            <div class="left">
                <div class="overlay">
                    <h1>Welcome!</h1>
                    <p align="justify">We are excited to have you here and hope that you find our website to be a valuable resource for all your reading and research needs. Our library is a place where you can explore new worlds, learn new things, and connect with others who share your love of books. Whether you are a student, a teacher, or a lifelong learner, we have something for you.</p>
                    <br>
                    <div class="alternate">
                        <h4>Login using</h4>
                        <a href="#"><img src="files/facebook.svg" alt="image"></a>
                        <a href="#"><img src="files/google-g-2015.svg" alt="image"></a>
                        <a href="#"><img src="files/Twitter-logo.svg.webp" alt="image"></a>
                    </div>
                </div>
            </div>
            <div class="right">
                <h1>Login</h1>
                <div class="form">
                    <form method="post">
                        <div class="in">
                            <div class="both">
                                <div class="in1">
                                    <label for="username"><span class="material-symbols-rounded"
                                            style="vertical-align:-6px;font-size:27px;">account_circle</span></label>
                                    <input type="text" class="a input" placeholder="Enter Username" name="username" required>
                                    <br>
                                </div>
                                <span class="focus-border"></span>
                                <div class="in2">
                                    <label for="password"><span class="material-symbols-rounded"
                                            style="vertical-align:-6px;font-size:27px;">lock</span></label>
                                    <input type="password" class="b input" placeholder="Enter Password" name="password" required>
                                    <br>
                                </div>
                                <span class="focus-border"></span>
                                
                            </div>
                            <div class="bottom">
                                <label><input type="checkbox" checked="checked" id="remember">&nbspRemember me</label>
                                <a href="xml_php" class="forgot">Forgot Password?</a>
                            </div>
                            <div class="prompt">
                                <?php echo $string;?>
                            </div><br>
                            <button type="submit" name="login" value="login" class="btn btn-primary"><span
                                    class="glyphicon glyphicon-floppy-disk"></span><strong>LOGIN</strong></button>
                        </div>
                    </form>
                    <h5 class="reg">Don't have an account? <a href="signup.php">Create One!</a></h5>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

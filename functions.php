<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
function check_login($con)
{
    if(isset($_SESSION['id']))
    {
        //stores current user ID to the variable $id
        $id = $_SESSION['id'];
        //creates a query to find the exact same users in the database
        $query = "SELECT * FROM members WHERE id = '$id' limit 1";

        //gets the result of the query
        $result = mysqli_query($con, $query);
        //checks if result is positive and result rows is greater than zero
        if($result && mysqli_num_rows($result) > 0)
        {
            //gets the data gathered from the query above and places it to our variable $user_data
            $user_data = mysqli_fetch_assoc($result);
            //assoc = associative array
            //places the data gathered from database then places it in an associative array
            return $user_data;
        }
    }
    //if fails, it will redirect to user
    header("Location: login.php");
    die; //stops the program
}

function random_number($length) //value of length is 20
{
    $text = "";
    if($length <= 0)
    {
        $length = 1;
        //prevents the id from going below 5 digits 
    }
    $len = rand(1, $length);
    //randomizes the length of the ID between 4 and 20 digits long
    for($i=0; $i< $len; $i++)
    {
        $text .= rand(0,9);
        //concactinates the randomized numbers that is selected
    }
    return $text;
}
function fetchMemberData($con, $memberId) {
    // Prepare the query with placeholders
    $query = "SELECT members.*, fine.fineAmount, borrow.bookID, book.title, borrow.borrowDate
              FROM members
              LEFT JOIN fine ON members.id = fine.memberID
              LEFT JOIN borrow ON members.id = borrow.memberID
              LEFT JOIN book ON borrow.bookID = book.id
              WHERE members.id = ?";
    // Prepare the statement
    $statement = $con->prepare($query);
    // Bind the parameter
    $statement->bind_param("i", $memberId);
    // Execute the statement
    $statement->execute();
    // Get the result set
    $result = $statement->get_result();
    if ($result) {
        // Fetch data from the result set
        $row = mysqli_fetch_assoc($result);
        // Close the statement
        $statement->close();

        // Return the fetched data
        return $row;
    } else {
        echo "Query failed: " . $con->error;
    }
    // Close the statement
    $statement->close();
    // Return null if no data is found
    return null;
}
function fetchBooks($con)
{
    $query = "SELECT * FROM book";
    $result = $con->query($query);
    if ($result) {
        // Fetch all rows from the result set as an associative array
        $books = $result->fetch_all(MYSQLI_ASSOC);

        // Free the result set
        $result->free_result();

        // Return the fetched books
        return $books;
    } else {
        echo "Query failed: " . $con->error;
    }

    // Return an empty array if no books are found or an error occurs
    return [];
}
function getBookByIndex($books, $index) {
    if (isset($books[$index])) {
        return $books[$index];
    }
    return null;
}


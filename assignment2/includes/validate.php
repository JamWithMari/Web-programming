<?php
session_start(); // Start the session.

require 'connect.php'; //connecting to database so we can grab the matching account 
include '../includes/header.php'; 
$username = $_POST['username'];
$password = $_POST['password'];
// Query to fetch the hashed password and userID.
$sql = "SELECT userID, password FROM users WHERE username = '$username'";
$found = $conn->query($sql);
$count = $found->rowCount();


if ($count == 1) {
    //PDO::FETCH_ASSOC grabs all associated data with the row so this includes the email user password
    $row = $found->fetch(PDO::FETCH_ASSOC);
    //then we use password_verify which is built in to password hash to compare the plaintext password from the user to the hashed on in the database
    if (password_verify($password, $row['password'])) {
        // Password is correct: set session and redirect.
        $_SESSION['userID'] = $row['userID'];
        header('Location: ../loggedIn.php'); // Redirect.
        exit(); // Stop further script execution.
    } else {
        //If the password was wrong then we just tell them 
        echo '<p class="error">Invalid username or password.</p>';
    }
} else {
    echo '<p class="error">Invalid username or password.</p>';
}

include '../includes/footer.php'; 
?>
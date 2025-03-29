<?php
require_once './includes/connect.php';
include './includes/header.php';
;
?>
<h1>Welcome to the Homepage</h1>
<p>This is the main page of the application.</p>

<!-- I'm going to handle the form validation in save.php file -->
<form action="save.php" method="POST">
    <input type="text" placeholder="Username" name="username">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <input type="password" name="confirm" placeholder="Confirm password"> 
    <button type="submit">Register</button>
</form>
<!-- i know that I'm going to have the header for the navigation but having another way for the user to login is better -->
<p>Already have an account? <a href="login.php">Log In</a></p>

<?php
//Doing the same thing for the footer
include './includes/footer.php';
;
?>
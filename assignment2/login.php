<?php
require_once './includes/connect.php';
include './includes/header.php';; // Include the header
?>
<h1>Login</h1>
<form action="./includes/validate.php" method="POST">
    <input type="text" placeholder="username" name="username">
    <input type="password" placeholder="Password" name="password">
    <button type="submit">Log In</button>
</form>
<?php
include './includes/footer.php';; // Include the footer
?>
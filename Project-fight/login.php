<?php
    $title = "Login Page";
    require_once './includes/database.php';
    include './includes/header.php';
?>
<form action="./includes/validate.php" method="POST" id="login">
    <input type="email" name="email" id="" placeholder="Email">
    <input type="password" name="password" id="" placeholder="Password">
    <input type="submit" name="Login" value="Login">
</form>
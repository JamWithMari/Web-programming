<?php
    $title = "Login Page";
    require_once './includes/database.php';
    include './includes/header.php';
?>
<main class="login-main">
    <h2 id="login-head">Login</h2>
    <form action="./includes/validate.php" method="POST" class="login">
        <input type="email" name="email" id="" placeholder="Email">
        <input type="password" name="password" id="" placeholder="Password">
        <input type="submit" name="Login" value="Login">
    </form>
</main>
<?php include'./includes/footer.php'?>

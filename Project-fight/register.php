<?php
$title = 'Account Registration';
include './includes/header.php';
?>
    <main class="register-main">
        <h2>New user registartion</h2>
        <form action="createUser.php" method="POST" class="register">
            <label for="fName">First Name</label>
            <input type="text" name="fName" id="fName">


            <label for="lName">Last Name</label>
            <input type="text" name="lName" id="lName">

            <label for="email">Email</label>
            <input type="email" name="email" id="email">

            <label for="password">Password</label>
            <input type="password" name="password" id="password">

            <label for="confirmPass">Confirm Password</label>
            <input type="password" name="confirmPass" id="confirm">
            
            <input type="submit" name="submit" value="Submit">
        </form>
    </main>
    <?php include'./includes/footer.php'?>

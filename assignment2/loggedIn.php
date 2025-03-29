<?php
    //header file
    include './includes/header.php';;
    session_start();
    if(!isset($_SESSION['userID'])){
        header('location:index.php');
        exit();
    }else{
       echo "<h1>You are logged into the site welcome to the page</h1>";
        echo"<section>";
            echo"<h2>Enjoy the site</h2>";
            echo"<p>Now that your logged in enjoy the site or you can sign out if you feel that is necesssary</p>";
            echo'<a href="logout.php">Logout here</a>';
        echo'</section>';
    }

    include './includes/footer.php';
?>

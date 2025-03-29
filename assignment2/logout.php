<?php
    //header file
    include './includes/header.php';
    
    session_start();
    session_unset();
    session_destroy();
    header('location:index.php');
    //footer file
    include './includes/footer.php';
?>
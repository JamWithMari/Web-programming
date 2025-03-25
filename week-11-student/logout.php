<?php
  include './inc/header.php';
  //access existing session
  session_start();
  //remove session variables
  session_unset();
  //kill the session
  session_destroy();
  //redirect to login
  header('location:index.php');
  include './inc/footer.php';

?>

<?php
  // add lesson code here
  $server = "localhost";
  $username = "root";
  $password = "mysql";
  $dbname = "phpclass";

  try{
    $conn = new PDO("mysql:host=$server; dbname=$dbname;", username:"$username", password:"$password");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }catch(PDOException $e){
    die("<p>Unable to connect to the database</p>");
  }
?>
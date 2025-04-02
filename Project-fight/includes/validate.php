<?php
$title = 'Login proccessing';
session_start();
require 'database.php';
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "SELECT user_id, password FROM siteusers WHERE email = '$email'";

$found = $conn->query($sql);
if($found->rowCount() ==1){
    $row = $found->fetch(PDO::FETCH_ASSOC);

    if(password_verify($password, $row['password'])){
        $_SESSION['user_id'] = $row['user_id'];
        header('Location: ../shoppingCart.php');//redirecting them to the shopping cart
        die();
    }else{
        echo '<p class="error">Invalid Password</p>';
        echo'<h2><a href="../login.php">Try again</a></h2>';
        
    }
}else{
    echo '<p class="error">Email</p>';
}
?>
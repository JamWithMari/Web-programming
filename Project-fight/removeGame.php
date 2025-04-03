<?php
$title = 'Game removal';
session_start();
require_once './includes/database.php';
//Wanting to make sure that the user is acutally logged in
if(!isset($_SESSION['user_id'])){
    header('Location: register.php');
    die();
}
//Wanting ot make user we actually can fulfill the query coming up
if(isset($_GET['game_id']) && !empty($_GET['game_id'])){
    //defining the delete game with game id from the link
    $deleteGame = $_GET['game_id'];
    //getting the userID associated with the session
    $userID = $_SESSION['user_id'];

    try{
        $sql = "DELETE FROM shoppingCart WHERE game_id =$deleteGame AND user_id =$userID";
        $success = $conn->query($sql);
        if($success){
            header('Location: shoppingCart.php');
        }

    }catch(PDOException $e){
        echo"Error fetching game data: " .$e->getMessage();
    }
}
?>
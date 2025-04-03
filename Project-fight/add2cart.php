<?php
$title = 'Adding to cart';
session_start();
//if the users isn't signed in we prompt them to the signup page
if(!isset($_SESSION['user_id'])){
    header('Location: register.php');
    exit();
}

require_once './includes/database.php';
//When using the get method values are returned as a string so we want to make sure we don't face any issue hence the is_numeric check
if(isset($_GET['game_id']) && is_numeric($_GET['game_id'])){
    $gameID = $_GET['game_id'];
    $userID = $_SESSION['user_id'];

    //now we going to try catch the sql statement to
    try{
        $sql = "SELECT * FROM shoppingCart WHERE user_id = $userID AND game_id= $gameID";
        $result = $conn->query($sql);
        $count = $result->rowCount();

        if($count > 0){
            //I made the decision to have a link to homepage because as a business you want the customer to engage more with the product so we'll direct to the homepage instead of the shopping cart "incase they want to buy more games"
            echo '<p class="error">This game is already in the cart <a href="index.php>Go home</a>"</p>';
            die();
        }else{
            $sql = "INSERT INTO shoppingCart (user_id, game_id) VALUES ($userID, $gameID)";
            $inserted = $conn->query($sql);
            header("Location: shoppingCart.php");
        }
    }catch(PDOException $e){
        echo "<p class='error'> SQL Error: " . $e->getMessage() . "</p>";
    }

}else{
    echo"Invalid game ID";
}

?>
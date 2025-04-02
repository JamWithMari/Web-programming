
<?php
$title = 'User shopping cart';
session_start();
require_once './includes/database.php';
include './includes/header.php';
//checking to see if the user is logged in
if(!isset($_SESSION['user_id'])){
    header('Location: register.php');
    die();
}
//assigning the userID variable to the user ID of the session
$userID = $_SESSION['user_id'];

try{
    $sql ="SELECT games.game_id, games.name, games.price, games.image 
            FROM shoppingCart 
            JOIN games ON shoppingCart.game_id = games.game_id 
            WHERE shoppingCart.user_id = $userID";
    
    $gamesInCart = $conn->query($sql)->fetchAll();



}catch(PDOException $e){
    echo"Error". $e->getMessage();
}
?>


        <?php 

            if(count($gamesInCart) > 0){
                foreach($gamesInCart as $cartGame){
                    echo "<img src='{$cartGame['image']}' alt='{$cartGame['name']} game art'>";
                    echo "<h3> {$cartGame['name']}</h3>";
                    echo "<p> {$cartGame['price']}</p>";
                    //The link for adding the game to cart
                    echo"<p><a href='removeGame.php?game_id={$cartGame['game_id']}'>Remove</a></p>";
                }
            }else{
                echo '<p class ="error">Your cart is empty</p>';
            }
        ?>
    </div>
</body>
</html>
   
        <?php $title ='Project Fight| Home';
        require './includes/database.php';
        include './includes/header.php';
        
        ?>
        
        <main>
            <section class="carousel">
                
            </section>

            <section class="game-list">
                <?php
                //Inside of here we'll have a for loop that displays the games and all heir details
                $sql = "SELECT * FROM games";
                //Running the query
                $result = $conn->query($sql); 
                

                //the for loop to display the games from the database
                foreach($result as $game){
                    //I'mg putting them each inside of a div called item for easy styling later on the dynamic nature of php is amazing!
                    echo "<div class='item'>";
                        echo "<img src='{$game['image']}' alt='{$game['name']} game art'>";
                        echo "<h3> {$game['name']}</h3>";
                        echo "<p class='details'> {$game['details']}</p>";
                        echo'<div class="extras">';
                            echo "<p>$ {$game['price']}</p>";
                            echo "<p> {$game['rating']}</p>";
                            //The link for adding the game to cart
                            echo"<p><a href='add2cart.php?game_id={$game['game_id']}'>Add to Cart</a></p>";
                        echo"</div>";
                    echo "</div>";
                }
                ?>
            </section>
        </main>
        
        
    </body>
    </html>
<?php
include './includes/database.php';
//
if(isset($_GET['user_id']) && !empty($_GET['user_id'])){
    $deleteId = $_GET['user_id'];
    try{
        $sql = "DELETE FROM siteusers WHERE user_id ='$deleteId'";
        $result = $conn->query($sql);

        if($result){
            echo"<h2 class='success'>Account deleted successful<h2>";
            echo'<a href="displayUsers.php">Admin Page</a>';
        }else{
            echo"Could not delete record";
        }
    }catch(PDOException $e){//This is incase we have something go wrong with the database connection
        echo "Error fetching user data: ".$e->getMessage();
        die();

    }
}else{//This else block is if the user directed to delete.php without a userID to delete we'll just use a redirect to send them to displayUsers if they have the right credentials
    header('Location: displayUsers.php');
    //killing the connection and code in the case things go wrong
    die();

}
?>
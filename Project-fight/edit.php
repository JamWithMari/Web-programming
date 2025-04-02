<?php
    $title = 'Admin Updating users';
    require_once('./includes/database.php');
    //establishing a variable to store user data
    $userData;
    if(isset($_GET['user_id']) && !empty($_GET['user_id'])){
        $editId = $_GET['user_id'];
        try{
            $sql = "SELECT * FROM siteusers WHERE user_id = '$editId'";
            $result = $conn->query($sql);
            $userData = $result->fetch(PDO::FETCH_ASSOC);//Fecthing all the associated data with the given user ID
           
             //checking to see if we're not able to get the specified user ID from the database 
            if(!$userData){
                echo "<p>User not found</p>";
                die();
            }
        }catch(PDOException $e){//This is incase we have something go wrong with the database connection
            echo "Error fetching user data: ".$e->getMessage();
            die();

        }
    }else{//This else block is if the user directed to edit.php without a userID to edit we'll just use a redirect to send them to displayUsers if they have the right credentials
        // header('Location: displayUsers.php');
        echo"You didn't select a option to edit";
        //killing the connection and code in the case things go wrong
        die();

    }

    //updating the record once the update form's submitted
    if(isset($_POST['Update'])){

        //declaringt the variables from the update form
        $userId = $_POST['user_id'];
        $fName = $_POST['fName'];
        $lName = $_POST['lName'];
        $email = $_POST['email'];
        $sql = "UPDATE siteusers SET first_name = '$fName', last_name = '$lName', email = '$email' WHERE user_id = '$userId'";
        //Running the update query
         $update = $conn->query($sql);

         //checking to see if the query worked
         if($update){
            echo"<h2 class='success'>User updated</h2>";
            echo'<a href="displayUsers.php">Admin Page</a>';
            die();
         }else{
            echo'<p class="error">Could not update user record</p>';
         }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Fight |</title>
</head>
<body>
    <form action="edit.php?user_id=<?php echo $userData['user_id']?>" method="POST">
        <input type="hidden" name="user_id" value="<?php echo$userData['user_id']?>">
        <label for="fName">First Name</label>
        <input type="text" name="fName" class="fName" value="<?php echo$userData['first_name']?>">

        <label for="lName">Last Name</label>
        <input type="text" name="lName" class="lName" value="<?php
        echo$userData['last_name']?>">

        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="<?php
        echo$userData['email']?>">

        <input type="submit" name="Update" value="Update User">
    </form>
</body>
</html>
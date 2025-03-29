<?php
    require_once './includes/connect.php';
    include './includes/header.php';
    //variables
    $username = $_POST['username'];
    $confirm = $_POST['confirm'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    //making an array for errors then I'll echo all of them at the end
    $errors = array();
    if(empty($username) || empty($confirm) || empty($password) || empty($email)){
        array_push($errors, "No fields can be left blank");
    }
    
    //Chekcing to see if there's a valid email address typed in
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        array_push($errors, "The Email isn't valid");
    }
    //checking to see if the passwords match
    if($password !== $confirm){
        array_push($errors,"The passwords do not match");
    }
    //checking to make sure the password is atleast 8 characters and contains atlaest 1 number using pregmatch
    if(!preg_match("/^(?=.*[0-9]).{8,}$/", $password)){
        array_push($errors, "The password is atleast 8 long and have atleast 1 number");
    }
    //Checking to see if the email or is already in the database

    $emailUsed = "SELECT * FROM users WHERE email ='$email'";
    $result = $conn->query($emailUsed);
    if($result->rowCount() > 0){
        array_push($errors, "This email already exists");   
    }

    $usernameUsed = "SELECT * FROM users WHERE username ='$username'";
    $result = $conn->query($usernameUsed);
    if($result->rowCount() > 0){
        array_push($errors, "This username taken");   
    }

    //Checking to see if any errors have been aded to the array
    if(count($errors) > 0){
        foreach($errors as $error){
            echo '<p class="error">' . $error . '</p>';
        }
    }else{
        //If no errors occur then we just add it to the database, but first we must hash the password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $inserts = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashedPassword')";
        //executing the inserts into the database
        $query = $conn->query($inserts);
        
        //providing an echo staetemt ot tell the user that the registration was good
        echo '<p id="success">Registered successfully! Please log in.</p>';
        
        //Closing the connection to the database
        $conn = null;

        //Redirecting the user back to the login page
        header('Location: login.php'); 
        
    }

    
    include './includes/footer.php';;


?>
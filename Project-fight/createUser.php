<?php
    $title = "Account registration";
    require_once './includes/database.php';
    include './includes/header.php';
        //we can to check if the form was actually submitted isntead of being accessed through the webpage
    if (isset($_POST['submit'])){
        //now that we now that form has been submitted from register.php then we do the validation of the form
        $fName = $_POST['fName'];
        $lName = $_POST['lName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm = $_POST['confirmPass'];
        
        $securePass =  password_hash($password, PASSWORD_DEFAULT);

        $errors = array();

        // Check for empty fields
        if (empty($fName) || empty($lName) || empty($email) || empty($password)) {
            array_push($errors, "No fields can be left blank");
        }

        // Validate first name and last name (letters only)
        if (!preg_match("/^[a-zA-Z]+$/", $fName)) {
            array_push($errors, "First name must contain only letters");
        }
        if (!preg_match("/^[a-zA-Z]+$/", $lName)) {
            array_push($errors, "Last name must contain only letters");
        }

        // Validate email format and additional checks for '@' and '.'
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "The Email isn't valid");
        }
                

        // Validate password length and at least one number
        if (strlen($password) < 8) {
            array_push($errors, "Password has to be at least 8 characters long");
        }
        if (!preg_match("/\d/", $password)) {
            array_push($errors, "Password must contain at least one number");
        }

        // Check if passwords match
        if ($password !== $confirm) {
            array_push($errors, "The passwords do not match");
        }

        // Check if email already exists in the database
        $emailQuery = "SELECT * FROM siteusers WHERE email ='$email'";
        $result = $conn->query($emailQuery);
        if($result->rowCount() > 0){
            array_push($errors, "This email already exists");   
        }

        // Display errors or insert into database
        if(count($errors) > 0){
            foreach($errors as $error){
                echo "<p class='error'>$error</p>";
            }
        } else {
            // Insert the data into the database
            $sql = "INSERT INTO siteusers (first_name, last_name, email, password) VALUES ('$fName', '$lName', '$email', '$securePass')";
            $result = $conn->exec($sql);
            echo "<h2 class='success'>Registration successful</h2>";
            echo'<h3><a href="./login.php">Login</a></h3>';
        }    
    }else{
        //we just going to have a redirect to register.php because the form wasn't submitted
        header('Location: register.php');
    }
    include'./includes/footer.php';
?>
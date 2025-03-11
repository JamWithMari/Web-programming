<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
<?php
    //start by including our classes
    include_once 'crud.php';
    include_once 'validate.php';

    //creating our class objects
    $crud = new crud();
    $validate = new validate();

    
if(isset($_POST['submit'])){
    //using our escape string function
    $name = $crud->escape_string($_POST['first-name']);
    $last_name = $crud->escape_string($_POST['last-name']);
    $email = $crud->escape_string($_POST['email']);
    $phone = $crud->escape_string($_POST['phone-number']);
    $birthday = $crud->escape_string($_POST['birthday']);
    $address = $crud->escape_string($_POST['address']);
    $frequency = $crud->escape_string($_POST['frequency']);

    $msg = $validate->checkEmpty($_POST, array('first-name', 'last-name', 'email', 'phone-number', 'birthday', 'address'));

    $checkEmail = $validate->validEmail($_POST['email']);
    $checkPhone = $validate->validPhone($_POST['phone-number']);

    if($msg != null){
        echo "<p>$msg</p>";
        //link back to the previous page
        echo "<a href='javascript:self.history.back();'>Go Back</a>";
    } elseif($checkEmail == false){
        echo "<p>Please enter a valid email address</p>";
    } elseif($checkPhone == false){
        echo "<p>Please enter a valid phone number</p>";
    } else {
        //if all the fields are valid
        $result = $crud->execute("INSERT INTO players(fName, lName, email, phone, birthdate, address, frequency) VALUES('$name', '$last_name', '$email', '$phone', '$birthday', '$address', '$frequency')");
        //Let the user know the registration was successful
        echo "<p>Registration was successful</p>";
        echo "<a href='index.php'>Back to main page</a>";
    }
}

 ?>
</body>
</html>

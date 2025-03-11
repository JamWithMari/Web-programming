<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD in OOP PHP | Add Our Data</title>
    <meta name="description" content="This week we will be using OOP PHP to create and read with our CRUD application">
    <meta name="robots" content="noindex, nofollow">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="./css/style.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" ></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Roboto:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
  </head>
  <body>
    <main>
    <?php
      // add the lesson code here
      include_once('crud.php');
      include_once('validate.php');
      //create our class objects
      $crud = new crud();
      $valid = new validate();

      if(isset($_POST['Submit'])){
        //using our escape string function
        $name = $crud->escape_string($_POST['name']);
        $age = $crud->escape_string($_POST['age']);
        $email = $crud->escape_string($_POST['email']);
        //using our functions found in our validate class
        $msg = $valid->checkEmpty($_POST, array('name', 'age', 'email'));

        $checkAge = $valid->validAge($_POST['age']);
        $checkEmail = $valid->validEmail($_POST['email']);

        if($msg != null){
          echo "<p>$msg</p>";
          echo "<a href='javascript:self.history.back();'> Go Back</a>";

        }elseif(!$checkAge){
          echo "<p>Enter a valid age</p>";

        }elseif(!$checkEmail){
          echo "<p>Enter a valid email</p>";
        }else{
          //if all the fields are valid
          $result = $crud->execute("INSERT into phpusers(name, age, email) VALUES('$name', '$age', '$email')");

          echo "<p>User Added!</p>";
          echo "<a href='view.php'>View Users</a>";
        }
      }
    ?>
    </main>
  </body>
</html>

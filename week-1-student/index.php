<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My First PHP Document</title>
    <meta name="description" content="This is the introduction to using PHP">
    <meta name="robots" content="noindex, nofollow">
  </head>
  <body>
    <!-- one thing that is really nice about PHP is that we can inject it anywhere we what to in a document. In order to add PHP we simply need to add the PHP tag. Just like the below example. -->
  <?php  //This is how we comment in PHP
    echo "<h1>Hello World</h1>";
    //next lets say  we are not sure what type of server config we are working with... this let's us check
    
    echo "<section>";
    echo "<h2>My first section with PHP</h2>";
    echo "<p></p>";

    //Lets do some math
    echo (pi());
    echo (sqrt(9));
    echo 5*5;
    echo "</br>";
    echo 3 + 5/2;

    //now let's look at a variable and a basic if statement
    $n =14;
    if($n < 20){
      echo "<p>Have a good Friday</p>";
    }
    
  ?>
   
  
  </body>
</html>

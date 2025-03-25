<?php
  // add lesson code here
  $title = "About Lesson | Handing Errors";
  $description = "This page will contain examples of how to handle errors";
  require './templates/header.php';
?>
<main>
  <section class="masthead about-masthead">
    <div>
      <h1>Error Handling</h1>
    </div>
  </section>
  <section class="row content-row">
    <div class="col-12">
      <h2>Let's Handle Some Errors!</h2>
    </div>
    <div class="col-12">
      <div>
        <?php
          // add lesson code here
          // $numberA = 0;
          // echo "<p>";
          // echo 2/$numberA;
          // echo "</p>";
        ?>
      </div>
      <div>
        <?php
          // add lesson code here
          // $numberB = 0;
          // if($numberB !=0){
          //   echo 2/$numberB;
          // }else{
          //   echo "<p>Cannot divide by zero</p>";
          // }
        ?>
      </div>
      <div>
        <?php
          // add lesson code here
          // function my_error_handler($error_no, $error_msg){
          //   echo "<p>Oops, something went wrong</p>";
          //   echo "<p>Error number: [$error_no]</p>";
          //   echo "<p>Error description: [$error_msg]</p>";
          // }

          // set_error_handler("my_error_handler");
          // echo "<p>";
          // echo 5/0;
          // echo"</p>";
        ?>
      </div>
      <div>
        <p>Next let's catch the error for a variable that has yet to be defined!</p>
        <?php
          // add lesson code here
          function customErrorHandle($erroNo, $errorMessgae, $errorFile, $errorLine){
            echo "<p>Error Message: [$errorNo] [$errorMessgae]</p>";
            echo "<p>Error Line: [$errorLine] [$errorFile]</p>";
          }

          // set_error_handler() is a built-in error handler function that sets the error handler function defined by the user
          set_error_handler("customErrorHandle");
          echo"<p>";
            echo $hello;
          echo "</p>";
        ?>
      </div>
    </div>
  </section>
  
</main>

<?php
  // add lesson code here
  require './templates/footer.php'
  
  
?>

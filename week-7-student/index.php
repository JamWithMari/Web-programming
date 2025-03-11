<?php
  // add lesson code here
  $pageTitle = 'Homepage';
  $pageDesc = 'This week we are looking at how we can work with images';
  include './inc/header.php';
  require_once 'database.php';
  if(isset($_POST['submit'])){
    //count the total files provided
    $countfiles = count($_FILES['files']['name']);
    //prepared statement
    $query = "INSERT INTO imagetest(name, iamge) VALUES (?,?)";
    $statement = $conn->prepare(($query));
    // loop all the files
    for($i =0; $i < $countfiles; $i++){
      //file name
      $filename = $_FILES['files']['name']['$i'];
      //location
      $target_file = './uploads/'.$filename;
    }

  }
  
?>
  <section class="masthead">
    <div>
      <h1>Uploading Images</h1>
    </div>
  </section>
  <section class="form-row">
    <form method='post' action='' enctype='multipart/form-data'>
      <p><input type='file' name='files[]' multiple /></p>
      <p><input class="btn btn-dark" type='submit' value='Submit' name='submit'/></p>
    </form>
    <?php // add lesson code here ?>
    <a href="view.php" class="btn btn-primary">View Uploads</a>
  </section>
<?php // add lesson code here
  include './inc/footer.php'
 ?>


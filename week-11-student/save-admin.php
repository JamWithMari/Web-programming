<?php
  require_once './inc/database.php';
  //variables
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$username = $_POST['username'];
	$confirm = $_POST['confirm'];
	$password = $_POST['password'];
  //validate inputs
  $ok = true;
  //add our header
  include './inc/header.php';
  if(empty($first_name)){
	$ok = false;
	echo '<p>First Name cannot be empty</p>';
  }
  if(empty($last_name)){
	$ok = false;
	echo '<p>Last Name cannot be empty</p>';
  }
  if(empty($username)){
	$ok = false;
	echo '<p>Ussername cannot be empty</p>';
  }

  if((empty($password)) || ($password != $confirm)){
	$ok = false;
	echo '<p>Password invalid</p>';
  }
  if($ok){
	//now we need to has our password
	$password = hash('sha512', $password);
	//set up our SQL
	$sql = "INSERT INTO phpadmins(first_name, last_name, username, password) VALUES ('$first_name', '$last_name', '$username', '$password')";
	$conn->exec($sql);
	//Message telling the user that the credentials were saved to the server
	echo "<section class ='success-row'>";
		echo "<div>";
			echo "<h3> Admin Saved</h3>";
		echo "</div>";
	echo "</section>";
	//Now we have to close the connetion to the database
	$conn = null;
  }
	?>
	<section class="row success-back-row">
		<div>
			<p>All setup, click the button below to head to the sign in page!</p>
			<a href="signin.php" class="btn btn-primary">Sign In</a>
		</div>
	</section>
<?php require './inc/footer.php'; ?>

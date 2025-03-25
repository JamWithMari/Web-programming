<?php
	// add lesson code
	include './inc/header.php';
	//check for authentication before we show any data
	session_start();
	if(!isset($_SESSION['user_id'])){
		header('location:signin.php');
		exit();
	}else{
		//connect to the database
		require_once './inc/database.php';
		$sql = "SELECT * FROM phppeople";
		//run the query and store the resuls
		$result = $conn ->query($sql);
		//create our table
		echo "<section class='person-row'>";
		echo "<table class='table table-striped'>
			<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>Phone Number</th>
			</tr>";

		foreach($result as $row){
			echo"<tr>
				<td>". $row['fname'] . "<td>
				<td>". $row['lname'] . "<td>
				<td>". $row['email'] . "<td>
				<td>". $row['telNumber'] . "<td>
				</tr>";
		}
		//close our table
		echo "</table>";
		echo "<a href = 'logout.php' class='btn btn-warning'>Lougout</a>";
		echo "</section>";
		//Close the connection to the database
		$conn = null;
		
	}

	include './inc/footer.php';
?>

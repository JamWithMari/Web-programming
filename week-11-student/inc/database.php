<?php
	// add lesson code
	try{
		$conn = new PDO('mysql: host=localhost; dbname=users', 'root', 'mysql');
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
		echo "Connection failed: ". $e->getMessage();
	}
?>

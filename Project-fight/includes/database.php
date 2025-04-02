<?php 

$server = "localhost";
$username = "root";
$password = "mysql";
$dbname = "gamestore";
//using oop to connect to the database
try {
    $conn = new PDO("mysql:host=$server;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
    

?>
<!-- $server = "localhost";
    $username = "root";
    $password = "mysql";
    $dbname = "gamestore";
    //using oop to connect to the database
    try {
        $conn = new PDO("mysql:host=$server;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    } -->
<?php

// Database Connection
class database
{
  private $host = "localhost";
  private $server = 'localhost';
  private $username = "root";
  private $password = "mysql";
  private $database = "phpClass";
  public $conn;

  // Create our connection
  public function __construct()
  {
    $this->conn = new mysqli($this->server, $this->username, $this->password, $this->database);
    if (mysqli_connect_error()) {
      trigger_error("Failed to connect to the database: " . mysqli_connect_error(), E_USER_ERROR);
    } else {
      return $this->conn;
    }
  }

  // Insert customer data into customers table
  public function insertData($post)
  {
    $name = $this->conn->real_escape_string($post['name']);
    $email = $this->conn->real_escape_string($post['email']);
    $salary = $this->conn->real_escape_string($post['salary']);
    $query = "INSERT INTO customers (name, email, salary) VALUES ('$name', '$email', '$salary')";
    $sql = $this->conn->query($query);
    if ($sql == true) {
      header("Location: index.php?msg1=insert");
    } else {
      echo "Could not add record";
    }
  }

  // Fetch customer records for show listing
  public function displayData()
  {
    $query = "SELECT * FROM customers";
    $result = $this->conn->query($query);
    if ($result->num_rows > 0) {
      $data = array();
      while ($row = $result->fetch_assoc()) {
        $data[] = $row;
      }
      return $data;
    } else {
      echo "No records found";
    }
  }

  // Fetch single data for edit from customers table
  public function displayRecordById($id)
  {
    $query = "SELECT * FROM customers WHERE id = '$id'";
    $result = $this->conn->query($query);
    if($result ->num_rows > 0){
      $row = $result->fetch_assoc();
      return $row;
    }else{
      echo "Record not found";
    }
  }

  // Update customer data into customers table
  public function updateRecord($postData){
    $name = $this->conn->real_escape_string($postData['uname']);
    $email = $this->conn->real_escape_string($postData['uemail']);
    $salary = $this->conn->real_escape_string($postData['usalary']);
    $id = $this->conn->real_escape_string($postData['id']);

    if(!empty($id) && !empty($postData)){
      $query = "UPDATE customers SET name = '$name', email = '$email', salary = '$salary' WHERE id = '$id'";
      $sql = $this->conn->query($query);
      if($sql == true){
        header("Location: index.php?msg2=update");
      }else{
        echo "Could not update record";
      }
    }
  }
}
?>
<?php
//To save some time we are going to create a class to hold the database connection information
class Database{
    //A pricate keyboard, as the name suggests is the one that can only be accessed from within the class.
    private $connection;
    //In PHP, $this keyword references the current object of the class

    function __construct(){
        $this->connect_db();
    }

    public function connect_db(){
        $this->connection = mysqli_connect('localhost', 'root', 'mysql', 'ledatabase');
        if(mysqli_connect_error()){
            die("Database connection failed" . mysqli_connect_error() . mysqli_connect_error());
        }
    }

    public function create($fName,$lName,$age,$email){
        $sql = "INSERT INTO phpperson (fName, lName, age, email)VALUES ('$fName', '$lName', '$age', '$email')";

        $res =mysqli_query($this->connection,$sql);

        if($res){
            return true;
        }else{
            return false;
        }

    }

    /* This function has two parameter:
    the $inputs parameter this is an associative array. it can be $_POST, $_GET, or a reulgar associative array
    the $fields parameter is an arrya that specifies a list of the fields with rules.
    the sanatize() function returns an array that contains the sanitized data*/

    public function sanatize($var){
        $return = mysqli_real_escape_string($this->connection, $var);
        return $return;
    }

}
$database = new Database();
?>
<?php
/**
 * Created by PhpStorm.
 * User: dor
 * Date: 2/21/15
 * Time: 6:03 PM
 */

class Model {
    private $controller;
    private $db_host ;
    private $username;
    private $password;
    private $db_name; // Database name

    public function __construct($controller){
        $this->controller=$controller;
        $this->db_name="evento";
        $this->db_host= "localhost";
        $this->username = "root";
        $this->password = "9670";
    }


    public function register($username,$password,$email,$fname,$lname,$bdate){
        // Create connection

        $conn = new mysqli($this->db_host,  $this->username, $this->password,  $this->db_name);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO users (username,password,firstName, lastName, email,bDate)
                  VALUES (\"$username\",\"$password\",\"$fname\",\"$lname\",\"$email\",\"$bdate\")";
        if (mysqli_query($conn, $sql)) {
            mysqli_close($conn);
            return "OK";
        } else {
            mysqli_close($conn);
            return "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

    }

    public function hashtag($tag){

    }



}
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
        $conn = new mysqli($this->db_host,  $this->username, $this->password,  $this->db_name);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $result = mysql_query("SELECT id FROM tags WHERE tag = \'.$tag.\'");
        if(mysql_num_rows($result) == 0) {
            // row not found, do stuff...
            $sql = "INSERT INTO tags (tag) VALUE (\".$tag.\")";
            if (mysqli_query($conn, $sql)) {
                mysqli_close($conn);
                return"OK";
            } else {
                mysqli_close($conn);
                return "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
    }

    /**
     * @param $tag
     * @param $username
     * @return string
     */
    public function user2Hash($tag,$username){
        $conn = new mysqli($this->db_host,  $this->username, $this->password,  $this->db_name);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $tagQ = "SELECT id FROM tags WHERE tag = '.$tag.'";
        $userQ = "SELECT id FROM users WHERE username = '$username'";
        $result=mysqli_query($conn,$tagQ);

            // Fetch one and one row
            while ($Trow=mysqli_fetch_row($result)) {

                $resultU = mysqli_query($conn, $userQ) ;
                    // Fetch one and one row
                    while ($Urow = mysqli_fetch_row($resultU)) {

                        $sql = "INSERT INTO users_tags (userID,tagID) VALUE ($Urow[0],$Trow[0])";

                        if (mysqli_query($conn, $sql)) {
                            mysqli_close($conn);
                            return"OK";
                        } else {
                            mysqli_close($conn);
                            return "Error: " . $sql . "<br>" . mysqli_error($conn);
                        }


                    }
                }


    }


}
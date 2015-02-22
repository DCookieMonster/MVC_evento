<?php
/**
 * Created by PhpStorm.
 * User: dor
 * Date: 2/21/15
 * Time: 6:03 PM
 */

class View {
    private $controller;
    private $username;

    public function __construct($controller) {
        $this->controller = $controller;
    }

    public function register(){
        $username=$_POST['username'];
        $password=$_POST['password'];
        $repassword=$_POST['repassword'];
        if ($repassword!=$password){
            echo "<script>alert(\"no match password\")</script>";
            header("location:register.php");
        }
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $bdate=$_POST['bdate'];
        $this->controller->register($username,$password,$email,$fname,$lname,$bdate);
    }



    public function hashTag(){
        $tags=$_POST['Hash'];
        $username=$_POST['Username'];
        $this->controller->hashtag($tags,$username);
    }
}





<?php
/**
 * Created by PhpStorm.
 * User: dor
 * Date: 2/21/15
 * Time: 7:33 PM
 */

require 'Controller.php';
require 'Model.php';
require 'View.php';


$controller = new Controller();
$view = new View($controller);
$model = new Model($controller);
$controller->setControl($model,$view);


if(isset($_POST['submit']))
{
    $view->register();
    $username=$_POST['username'];
    echo header("location:tag.php?username=$username");
}
if (is_ajax()) {
    if (isset($_POST["Hash"]) && !empty($_POST["Hash"])) { //Checks if action value exists
        $view->hashTag();
                echo header("location:success.php");
    }
}

//Function to check if the request is an AJAX request
function is_ajax() {
    return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}


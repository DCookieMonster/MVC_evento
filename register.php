<?php
/**
 * Created by PhpStorm.
 * User: dor
 * Date: 2/21/15
 * Time: 7:14 PM
 */


?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <title>Evento Registration Page</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
<div class="container">
    <div class="row text-center pad-top ">
        <div class="col-md-12">
            <h2>Evento User Registration Page</h2>
        </div>
    </div>
    <div class="row  pad-top">

        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong>   Register Yourself </strong>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="index.php">
                        <br/>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-circle-o-notch"  ></i></span>
                            <input id="fname" name="fname" type="text" class="form-control" placeholder="First Name" />
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-circle-o-notch"  ></i></span>
                            <input id="lname" name="lname" type="text" class="form-control" placeholder="Last Name" />
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-circle-o-notch"  ></i></span>
                            <input id="bdate" name="bdate" type="text" class="form-control" placeholder="Birth Date" />
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                            <input id="username" name="username" type="text" class="form-control" placeholder="Desired Username" />
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon">@</span>
                            <input id="email" name="email" type="text" class="form-control" placeholder="Your Email" />
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                            <input id="password" name="password" type="password" class="form-control" placeholder="Enter Password" />
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                            <input id="repassword" name="repassword" type="password" class="form-control" placeholder="Retype Password" />
                        </div>
                        <input id="submit" style="background-color: forestgreen;color: #ffffff" type="submit" value="Register Me" name="submit">
                        <hr />
                        Already Registered ?  <a href="#" >Login here</a>
                    </form>
                </div>

            </div>
        </div>


    </div>
</div>
<script>
    $('#submit').on('submit', function () {
        var password = $('password');
        var repassword= $('repassword');
        if (password!=repassword)
        alert("Password Not Match");


    });

</script>

<!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
<!-- CORE JQUERY  -->
<script src="assets/plugins/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS  -->
<script src="assets/plugins/bootstrap.js"></script>

</body>
</html>

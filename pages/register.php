<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include'connect.php';
?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <form method="post">
        <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Register Here</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Your name" name="txtname" type="text" value="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Your address" name="txtaddress" type="text" value="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Your contact" name="txtcontact" type="text" maxlength="11" value="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Enter your username..." name="txtusername" type="text" value="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Enter your password..." name="txtpassword" type="password" value="">
                                </div>
                                <div class="form-group">
                                <input type="submit" name="register" value="Register" class="btn btn-lg btn-success btn-block">
                                </div>
                                Already Have an Account?
                                <a href="login.php">Login Here</a>
        
                
                                </div>
        
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>


</body>

</html>
<?php

if (isset($_POST['register'])) {

    $name = $_POST['txtname'];
    $address = $_POST['txtname'];
    $contact = $_POST['txtcontact'];
    $username = $_POST['txtusername'];
    $password = $_POST['txtpassword'];

    $sql = "Insert into user (name,address,contact,username,password) values
    ('$name','$address','$contact','$username','$password')";
    
    $data = mysqli_query($conn, $sql);

    echo "<script language = Javascript>;
        alert('Record Saved!');
        location.href='login.php';
        </script>";
}

?>
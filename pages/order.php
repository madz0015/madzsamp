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
<div id="wrapper">

<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Dashboard</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                </li>
                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li><a href="login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <?php
            include 'dashboard.php';
            ?>
    </div>
    <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="index.php"><i class="fa fa-home fa-fw"></i> Home</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> View Records<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="customer_list.php">List of Customer</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="order.php"><i class="fa fa-book fa-fw"></i>Order Information</a>
                        </li>
                        <li>
                            <a href="forms.php"><i class="fa fa-edit fa-fw"></i> Sign Up Order</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Manage Product<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="product.php">Register Product</a>
                                </li>
                                <li>
                                    <a href="product_list.php">List of Products</a>
                                </li>
                                <li>
                                    <a href="borrowproduct.php">Customer Utang</a>
                                </li>
                                <li>
                                    <a href="typography.php">Customer Interest</a>
                                </li>
                                <li>
                                    <a href="icons.php">History Of Utang</a>
                                </li>
                                <li>
                                    <a href="grid.php">More</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                     
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> History of M&A Store<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">2020</a>
                                </li>
                                <li>
                                    <a href="#">2021</a>
                                </li>
                                <li>
                                    <a href="#">Last Year <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">2022</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> About Us<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.php">Visit Us</a>
                                </li>
                                <li>
                                    <a href="login.php">Store Account</a>
                                </li>
                            </ul>
</div>
    </div>
    <form method="post">
        <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Sign Up Your Order Here</h3>
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
                                    <input class="form-control" placeholder="Your age" name="txtage" type="text"  value="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Your product" name="txtproduct" type="text" value="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Your quantity" name="txtquantity" type="text" value="">
                                </div>
                                <div class="form-group">
                                <input type="submit" name="register" value="Order" class="btn btn-lg btn-success btn-block">
                                </div>
        
                
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
    $address = $_POST['txtaddress'];
    $age = $_POST['txtage'];
    $product = $_POST['txtproduct'];
    $quantity = $_POST['txtquantity'];

    $sql = "Insert into order_tbl (name,address,age,product,quantity) values
    ('$name','$address','$age','$product','$quantity')";
    
    $data = mysqli_query($conn, $sql);

    echo "<script language = Javascript>;
        alert('Order Saved!');
        location.href='order.php';
        </script>";
}

?>
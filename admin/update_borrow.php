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

    <title>Product Registration</title>

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
<body style="background-image: url('images/shops.jpg')">
<div id="wrapper">
<?php
	if (isset($_GET['update'])){
		$fetch = "SELECT * FROM borrows_tbl WHERE users_id='".$_GET['update']."'";
		$sql = mysqli_query($conn,$fetch);
		$rest = mysqli_fetch_array($sql);
		$name = $rest['name'];
		$address = $rest['address'];
		$age = $rest['age'];
		$product = $rest['product'];
		$quantity = $rest['quantity'];



	}
?>

<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="background-image: url('images/shops.jpg')">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="home.php">Dashboard</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
            <li><a href="Account.php"><i class="fa fa-user fa-fw"></i> Store Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="index.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <!-- /.Menu.... -->
    <?php
    include 'dashboard.php';
    ?>
    </div>
    <form method="post" action="">
    <div id="wrapper" style="background-image: url('images/shops.jpg')">
        <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Borrower Register</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Your name" name="txtname" type="text" value="<?php echo $rest['name']; ?>">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Your address" name="txtaddress" type="text" value=<?php echo $rest['address']; ?>>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Your age" name="txtage" type="text" value="<?php echo $rest['age']; ?>">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Enter product" name="txtproduct" type="text" value="<?php echo $rest['product']; ?>">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Enter desire quantity" name="txtquantity" type="text" value="<?php echo $rest['quantity']; ?>">
                                </div>
                                <div class="form-group">
                                <input type="submit" name="update" value="Update" class="btn btn-lg btn-success btn-block">
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

if (isset($_POST['update'])) {

    $name = $_POST['txtname'];
    $address = $_POST['txtaddress'];
    $age = $_POST['txtage'];
    $product = $_POST['txtproduct'];
    $quantity = $_POST['txtquantity'];
    

    $update = "UPDATE borrows_tbl SET name='$name',address='$address',age='$age',product='$product',quantity='$quantity' WHERE users_id ='".$_GET['update']."'";
    
    $data = mysqli_query($conn, $update);

    echo "<script language = Javascript>;
        alert('Record Updated!');
        location.href='borrower_list.php';
        </script>";
}

?>
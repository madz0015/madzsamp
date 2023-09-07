<!DOCTYPE html>
<html lang="en">
<?php 
include 'connect.php';
?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Manage Por</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

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
            <!-- /.navbar-top-links -->

            <!-- /.Menu.... -->
            <?php
            include 'dashboard.php';
            ?>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <form method="post">
        <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Borrow Product</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option>Customer Borrower</option>
                                        <?php
                                            $data = "SELECT * FROM user order by name asc";
                                            $rest = mysqli_query($conn, $data);
                                            while($row = mysqli_fetch_array($rest)){         
                                        ?>
                                        <option value ="<?php echo $row ['user_id'];?>"><?php echo $row['name'];}?></option>
                                    </select>
                                </div>
                                <div class="form-group">
                                <select class="form-control">
                                        <option>Select Product</option>
                                        <?php
                                            $data = "SELECT * FROM book_tbl order by product asc";
                                            $rest = mysqli_query($conn, $data);
                                            while($row = mysqli_fetch_array($rest)){         
                                        ?>
                                        <option value ="<?php echo $row ['shop_id'];?>"><?php echo $row['product'];}?></option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Your reason" name="txtdescription" type="text" value="" required>
                                </div>
                                <div class="form-group">
                                <select class="form-control">
                                        <option>Select Price</option>
                                        <?php
                                            $data = "SELECT * FROM book_tbl order by quantity asc";
                                            $rest = mysqli_query($conn, $data);
                                            while($row = mysqli_fetch_array($rest)){         
                                        ?>
                                        <option value ="<?php echo $row ['shop_id'];?>"><?php echo $row['quantity'];}?></option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Enter expiry date..." name="txtdate" type="date" value="">
                                </div>
                                <div class="form-group">
                                <input type="submit" name="register" value="Register Borrow" class="btn btn-lg btn-success btn-block">
                                </div>
        
                
                                </div>
        
                            </fieldset>
                        </form>
       
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>                               
    


</body>

</html>

<?php

if (isset($_POST['register'])) {

    $product = $_POST['txtproduct'];
    $name = $_POST['txtname'];
    $description = $_POST['txtdescription'];
    $quantity = $_POST['txtquantity'];
    $date = $_POST['txtdate'];

    $sql = "Insert into book_tbl (product,name,description,quantity,expiry_date) values
    ('$product','$name','$description','$quantity','$date')";
    
    $data = mysqli_query($conn, $sql);

    echo "<script language = Javascript>;
        alert('Record Saved!');
        location.href='login.php;
        </script>";
}

?>
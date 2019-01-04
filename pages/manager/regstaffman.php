<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Staff Register</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../../vendor/morrisjs/morris.css" rel="stylesheet">

     <link href="../style.css" rel="stylesheet">
     <link href="footer.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <?php include 'include/headermanager.php'?>

</head>

<body background="back-ground.jpg">

    <div id="wrapper">

        
        <div id="page-wrapper">
            <div class="row">
                
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Staff Register
                        </div>
                        <!-- /.panel-heading -->
                        <div class=panelbody>
  <form width=70% action="regstaffman-insert.php" method="post">
    
     <label for="ftype">NIC</label><br>
    <input type="text" id="nic" name="NIC" placeholder="Enter NIC Number.."><br>

    <label for="fid">First Name</label><br>
    <input type="text" id="fname" name="firstname" placeholder="Enter First name.."><br>

     <label for="fid">Last Name</label><br>
    <input type="text" id="lname" name="lastname" placeholder="Enter Last name.."><br>

   <label for="uprice">Contact Number</label><br>
    <input type="text" id="cno" name="contactnumber" placeholder="Enter Contact Number.."><br>
      

     <label for="fid">Address</label><br>
    <input type="text" id="address" name="address" placeholder="Enter Address.."><br>

     <label for="uprice">Date Of Birth</label><br>
    <input type="date" id="dob" name="dob" placeholder="Enter Birth Date.."><br>
    
    <label for="uprice">Email</label><br>
    <input type="email" id="email" name="email" placeholder="Enter Email.."><br>

    <label for="staff">Register As:</label><br>

      <select name="type">
        <option value="Data Entry Operator">Data Entry Operator</option>
        <option value="Manager">Manager</option>
        <option value="Cashier">Cashier</option>
        <option value="Owner">Owner</option>
      </select>
      
    <label for="uprice">Username</label><br>
    <input type="text" id="uname" name="username" placeholder="Enter username.."><br>
      
     <label for="uprice">Password</label><br>
    <input type="password" id="password" name="password" placeholder="Enter passwrd.."><br>
      
    <label for="uprice">Confirm Password</label><br>
    <input type="password" id="cpassword" name="cpassword" placeholder="Confirm password.."><br>


    
  <center>
    <input type="submit" value="Submit"></center>
  </form>
</div>

                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
                
                <!-- /.col-lg-6 -->
                
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Flot Charts JavaScript -->
    <script src="../../vendor/flot/excanvas.min.js"></script>
    <script src="../../vendor/flot/jquery.flot.js"></script>
    <script src="../../vendor/flot/jquery.flot.pie.js"></script>
    <script src="../../vendor/flot/jquery.flot.resize.js"></script>
    <script src="../../vendor/flot/jquery.flot.time.js"></script>
    <script src="../../vendor/flot-tooltip/jquery.flot.tooltip.min.js"></script>
    <script src="../../data/flot-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../../dist/js/sb-admin-2.js"></script>

    <?php include 'footer.php' ?>

</body>

</html>

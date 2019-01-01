<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>purchase-owner</title>

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
    
    <?php include 'include/headerowner.php'?>

</head>

<body background="back-ground.jpg.jpg">

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
                           View Staff Details
                        </div>
                        <!-- /.panel-heading -->
                        <div class=panelbody>
  <form width=70% action="/action_page.php">
   
       <label for="fid">Employee NIC</label><br>
    <input type="date" id="fname" name="firstname" placeholder="Enter Lubricant Name.."><br>
      
          
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

<?php

            $conn = mysqli_connect ("localhost", "root", "", "group") or die ("cannot connect");

			if (null !==(filter_input(INPUT_POST, 'sub'))){

					$uname=mysqli_real_escape_string($conn,filter_input(INPUT_POST, 'uname'));

					$sql = "SELECT First Name,Last Name,NIC,Address,Contact Number,Date Of Birth,Username,Password FROM Customer WHERE username='$uname';";

					$result=mysqli_query($conn,$sql);

					$queryResult=mysqli_num_rows($result);

					if ($queryResult > 0){

						echo "<p style=\"font-size:18px;text-align:center\">Employee is available</p>";
						echo "<div class=\"view\">";
						echo "<table border=1 style=\"width:50%\">";
						echo "<tr><th>Username</th><th>First Name</th><th>Last Name</th><th>NIC</th><th>Email</th><th>Address</th><th>Contact Number</th><th>Date Of Birth</th><th>Username</th><th>Password</th></tr>";

						while ($row=mysqli_fetch_assoc($result)){

							$uname = $row['username'];
							$cus_id=$row['customer_id'];
							$cus_name=$row['customer_name'];
							$contact_number = $row['contact_number'];
							$email = $row['email'];
							$nic = $row['nic'];
							$password=$row['password'];
							echo "<tr><td>".$uname."</td><td>".$cus_id."</td><td>".$cus_name."</td><td>".$contact_number."</td><td>".$email."</td><td>".$nic."</td><td>".$password."</td></tr>";    
							}
						    echo "</table>";
						    echo "</div>";

					}else {

						echo "<p style=\"text-align:center\">Employee is not available</p>";
					}
				}



			
		?>


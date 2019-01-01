<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cash Sales</title>

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
    
    <?php include 'include/headerdeo.php'?>

</head>

<body background="back-ground.jpg.jpg">

    <div id="wrapper">

        

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data entry Operator</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Cash Sales
                        </div>
                        <!-- /.panel-heading -->
                        <div class=panelbody>
  <form width=70% action="sales-insert.php" method="post">
    <label for="fid">Pump ID</label><br>
    <input type="text" id="pumpid" name="pumpid" placeholder="Enter Pump ID.."><br>

     <label for="fid">Pumper ID</label><br>
    <input type="text" id="pumperid" name="pumperid" placeholder="Enter pumper ID.."><br>

   <!--  <label for="ftype">Opening Meter Reading</label><br>
    <input type="text" id="lname" name="lastname" placeholder="Enter Opening Meter Readings.."><br>
 -->
     <label for="fid">Closing Meater Readings</label><br>
    <input type="text" id="cmreading" name="cmreading" placeholder="Enter closing Meter Readings.."><br>


    <label for="uprice">Starting Time</label><br>
    <input type="time" id="stime" name="stime" placeholder="Enter Starting Time.."><br>

    <label for="uprice">Ending Time</label><br>
    <input type="time" id="etime" name="etime" placeholder="Enter Ending Time.."><br>

    <label for="uprice">Date</label><br>
    <input type="date" id="date" name="date" placeholder="Enter Date.."><br>

     <label for="uprice">Debtor Sales</label><br>
    <input type="text" id="debtorsales" name="debtorsales" placeholder="Enter Debtor Sales.."><br>

     <label for="uprice">Credit Card Sales</label><br>
    <input type="text" id="cardsales" name="cardsales" placeholder="Enter Credit Card Sales.."><br>

    <label for="uprice">Shortages</label><br>
    <input type="text" id="short" name="short" placeholder="Enter Shortages.."><br>

    
  <center>
      
     <!--  <a href="creditdeo.php"><button type="button" class="btn">Credit card</button></a>
      <a href="debtordeo.php"><button type="button" class="btn">Debtor</button></a> -->
      
      
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
    <script src="../dist/js/sb-admin-2.js"></script>

    <?php include 'footer.php' ?>

</body>

</html>

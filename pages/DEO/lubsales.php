<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lubricant_Sales</title>

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
   
    <?php

if(empty($_SESSION))
{
    echo "<script>window.alert('Please login to continue !');
                window.location='../login.php'</script>";
}
?>

<?php 

// if(isset($_SESSION['Type']))
// {
//     if(!strcmp($_SESSION['Type'],"Manager")) {
//         echo "<script>window.alert('You are not autherized to view this page !');
//                 window.location='../index.php'</script>";
//     }
// }

?>

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
                            Lubricant Sales
                        </div>
                        <!-- /.panel-heading -->
                        <div class=panelbody>

  <form width=70% action="lubsales-insert.php" method="post">
    <label for="fid">Lubricant ID</label><br>
    <input type="text" id="lubid" name="lubid" placeholder="Enter Lubricant ID.."><br>

     <label for="fid">Date</label><br>
    <input type="Date" id="date" name="date" placeholder="Enter Date.."><br>

  
     <label for="fid">Time</label><br>
    <input type="time" id="time" name="time" placeholder="Enter time.."><br>


    <label for="uprice">No Of Items</label><br>
    <input type="text" id="noi" name="noi" placeholder="Enter No of Items.."><br>

    
    
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

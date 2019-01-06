<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pump Register</title>

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

<body>

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
                            Pump Register
                        </div>
                        <!-- /.panel-heading -->
                        <div class=panelbody>
  <form width=70% action="pumpreg-insert.php" method="post">
    <label for="fid">Pump ID</label><br>
    <input type="text" id="pumpid" name="pumpid" minlength="6" maxlength="10" placeholder="Enter Pump ID.."required><br>

     <label for="ftype">Tank ID</label><br>
     <select name="tankid">
    <?php

    include "../../dbConnect/dbConnect.php";
    $count=0;
    $conn=dbConnect();

    $sql="SELECT TankId from Tank";

    $result=$conn->query($sql);

    if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
    $n=$row['TankId'];
    echo "<option value='$n'>".$row['TankId']."</option>";

    $count++;
}
}
?>
</select><br>

    <!--  <label for="fid">Fuel ID</label><br>

    <select name="fuelid">
        <?php

        include"../../dbConnect/dbConnect.php";
        $count=0;
        $conn=dbConnect();

        $sql="SELECT FuelId from Fuel";
        $result=$conn->query($sql);

        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $n=$row['FuelID'];
                echo"<option value='$n'>".$row['FuelId']."</option>";

                $count++;
            }
        }
        ?>
    </select><br>
 -->
    <!--   <select name="fuelid">
    <?php

    include "../../dbConnect/dbConnect.php";
    $count=0;
    $conn=dbConnect();

    $sql="SELECT FuelId from Fuel";

    $result=$conn->query($sql);

    if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
    $n=$row['FuelId'];
    echo "<option value='$n'>".$row['FuelId']."</option>";

    $count++;
}
}
?>
</select><br> -->
    <!-- <input type="text" id="fuelid" name="fuelid" placeholder="Enter Fuel ID.."><br>

    -->
    <!-- <input type="text" id="tankid" name="tankid" placeholder="Enter Tank ID.."><br>
 -->
     


    
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
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

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

    <!-- <?php include 'footer.php' ?>
 -->
</body>

</html>

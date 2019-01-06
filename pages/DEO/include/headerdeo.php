
    <header>
         <link href="../../vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
         <!-- MetisMenu CSS -->
         <link href="../../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
         <link href="../../vendor/morrisjs/morris.css" rel="stylesheet">
         <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

         <link href="../../dist/css/sb-admin-2.css" rel="stylesheet">
   
    <div id="wrapper">
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand">Fuel Station Management System</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <script type="text/javascript" src="jquery.min.js"></script>
                        <script type="text/javascript">
                            function logout() {
                                $.get("logout.php");
                                return false;
                        }
                    </script>
                    <ul class="dropdown-menu dropdown-user">
                       
                        <li class="divider"></li>
                        <li><a href="../login.php" onclick="logout()"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
               
                <ul>   
                <li>Data Entry Operator</li>
                </ul> 
                
            </ul>
            <!-- /.navbar-top-links -->
           
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse" bgcolor="black">
                    <ul class="nav" id="side-menu" bgcolor="#E6E6FA">
                        
                        <li>
                            <a href="deoindex.php"><i class="fa fa-dashboard fa-fw"></i> Data entry Operator</a>
                        </li>

                          <li>
                            <a href=""><i class="fa fa-bar-chart-o fa-fw"></i> Sales<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                <li>
                                    <a href="salesdeo.php">Fuel Sales</a>
                                </li>
                                <li>
                                    <a href="lubsales.php">Lubricant sales</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Register<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="fuelregdeo.php">Fuel</a>
                                </li>
                                 <li>
                                    <a href="fuelpricereg.php">Fuel Price</a>
                                </li>
                                <li>
                                    <a href="lubregdeo.php">Lubricant</a>
                                </li>
                                 <li>
                                    <a href="lubregprice.php">Lubricant Price</a>
                                </li>
                                <li>
                                    <a href="pumperregdeo.php">pumper</a>
                                </li>
                                <li>
                                    <a href="pumpregdeo.php">pump</a>
                                </li>
                                <li>
                                    <a href="debtorregdeo.php">Debtor</a>
                                </li>
                                 <li>
                                    <a href="tankregdeo.php">Tank</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                       <!--  <li>
                            <a href="pumperleaves.html"><i class="fa fa-table fa-fw"></i> Pumper Leaves Details</a>
                        </li> -->
                      </ul>
                      </div>


                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        </div>
</header>
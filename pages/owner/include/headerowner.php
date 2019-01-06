
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
                <li>Owner</li>
                </ul> 
                
            </ul>
            <!-- /.navbar-top-links -->
           
           <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                          <li>
                            <a href="ownerindex.php"><i class="fa fa-dashboard fa-fw"></i> Owner</a>
                        </li>
                        
                        
                        

                          <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Staff Details <span class="fa arrow"></span></a>
                            
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> View Reports<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="reportsales.php">Sales</a>
                                </li>
                                <li>
                                    <a href="reportpurchase.php">Purchase</a>
                                </li>
                                <li>
                                    <a href="reportsales.php">Stock</a>
                                </li>
                                <li>
                                    <a href="reportprofit.php">Profit & Loss</a>
                                </li>
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="salerystaff.php"><i class="fa fa-table fa-fw"></i> Salery Details</a>
                        </li>
                      </ul>
                      </div>


                <!-- /.sidebar-collapse -->
            </div>
        </nav>
        </div>
</header>
<html>
    <head>
        <?php include '../include/header.php' ?>

        <title>Cashier cash</title>
        
        <link rel="stylesheet" type="text/css" href="../CSS/style1.css"/>
        <link rel="stylesheet" type="text/css" href="..CSS/stylek.css"/>
        
    </head>
    
    <body class="image-slider">
        
        <div id="box">
            <center><h2> Cashier  Daily Cash to Shift</h2>
            <form action="reg.php" method="post">
                <table cellspacing="1" style="border:2px #ffffff;margin-top:50px;">
                    <tr>
                        <td><p class="data1">Date</p></td>
                        <td><input name="sdate" type="date" class="inputvalues" placeholder="Enter Shift date" required></td>
                        <td colspan="2" rowspan="4"><p class="UNPW">Cash to be received...</p>
             
                            <?$db=mysqli_connect("","","", "");
                                $sql = "SELECT * FROM images WHERE number='$a'";

                                    $result = mysqli_query($db,$sql);    
                                   while($row = mysqli_fetch_row($result))

                                   {Echo;}
                                   ?>
                           
                            
                        </td>
                    </tr>
                    <tr>
                        
                    </tr>
                    <tr>
                        <td><p class="data1">Pumper NIC</p></td>
                        <td><input name="pname" type="text" class="inputvalues" placeholder="Type Pumper NIC" required></td>
                    </tr>
                    <tr>
                        
                    </tr>
                    
                    <tr>
                        <td colspan="2"><p class="data1">Amount Deposited</p></td>
                        <td colspan="2"><input name="cashdip" type="text" class="inputvalues" placeholder="Enter Deposit amount" required></td>
                    </tr>
                    <tr>
                        <td colspan="2"></td>
                        <td colspan="2"><select name="bank"  class="inputvalues" placeholder="Select Bank" required>
                               <option value="Sampath">Sampath</option>
                                <option value="DFCC">DFCC</option>
                            </select></td>
                    </tr>
                   
                     </table>
                     
                  <table align=center>
                    <tr>
                    <td><a href="debdeo.php"><button type="button" class="btn">Submit</button></a></td>
                    
                    
                    <td><a href="creditdeo.php"><button type="button" class="btn">New Record</button></a></td>
                    
                    
                   
                </tr>
                    
                <tr>
                         <td><a href="creditdeo.php"><button type="button" class="btn">View enterd data</button></a></td>
                         <td><a href="creditdeo.php"><button type="button" class="btn">Edit enterd data</button></a></td>
                        
                    </tr>
                        
                    
                     </table>   

                
            </form>
                </center>

        </div> 
        
        <?php include '../include/footer.php' ?>
  
  
    </body>
</html>
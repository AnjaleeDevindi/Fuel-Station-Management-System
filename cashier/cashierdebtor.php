<html>
    <head>
        <?php include '../include/header.php' ?>

        <title>Debtor Deposit</title>
        
        <link rel="stylesheet" type="text/css" href="../CSS/style1.css"/>
        <link rel="stylesheet" type="text/css" href="../CSS/stylek.css"/>
        
    </head>
    
    <body class="image-slider">
        
        <div id="box">
            <center><h2>Debtor Deposit</h2>

            <form action="reg.php" method="post">
                <table cellspacing="10" style="border:2px #ffffff">
                    <tr>
                        <td><p class="data1">Date</p></td>
                        <td><input name="sdate" type="date" class="inputvalues" placeholder="Enter Shift date" required></td> 
                    </tr>
                    <tr>
                        <td><p class="data1">Debtor ID</p></td>
                        <td>
                            <select name="bank"  class="inputvalues" placeholder="Select Debtor" required>
                               <option value="ABC co.">ABC co.</option>
                                <option value="Abans">Abans</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><p class="data1">Cash To Be Received</p></td>
                         <!--            adala debtor gewanna ona balanseda-->
                            <?$db=mysqli_connect("","","", "");
                                $sql = "SELECT * FROM images WHERE number='$a'";

                                    $result = mysqli_query($db,$sql);    
                                   while($row = mysqli_fetch_row($result))

                                   {Echo;}
                                   ?>
                           
                            
                        
                    </tr>
                         <td><input name="sdate" type="text" class="inputvalues" placeholder="" required></td> 
                
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
<?php include 'include/footer.php' ?>
  
    </body>
</html>
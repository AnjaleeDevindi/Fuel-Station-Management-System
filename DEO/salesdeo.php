<html>
    <head>
        <?php include '../include/header.php' ?>

        <title>Home</title>
        
        <link rel="stylesheet" type="text/css" href="../CSS/style1.css"/>
        
    </head>
    
    <body class="image-slider">
        
        <div id="box">
            <center><h2> Sales  </h2>

            <form action="reg.php" method="post">
                <table cellspacing="10">
                    <tr>
                <td colspan="2"><p class=data1>Pump Id</p></td>
                <td><input name="cname" type="text" class="inputvalues" placeholder="Type Pump Id" required></td>
                    </tr>
                    <tr>
                <td colspan="2"><p class=data1>Pumper NIC</p></td>
                <td><input name="cname" type="text" class="inputvalues" placeholder="Type Pumper NIC" required><br></td>
                    </tr>
                    <tr>
                <td colspan="2"><p class=data1>Opening Meter Reading</p></td>
                <td><input name="nic" type="text" class="inputvalues" placeholder="enter Opening Meter Reading" required></td>
                    </tr>
                    <tr>
                <td colspan="2"><p class=data1>Closing Meter Reading</p></td>
                <td><input name="email" type="text" class="inputvalues" placeholder="enter address" required></td>
                    </tr>
                    <tr>
                <td colspan="2"><p class=data1>Starting Time</p></td>
                <td><input name="phone" type="text" class="inputvalues" placeholder="enter Closing Meter Reading" required></td>
                   </tr>
                    <tr>
                <td colspan="2"><p class=data1>Ending Time</p></td>
                <td><input name="birth" type="date" class="inputvalues" placeholder="enter Ending Time" required></td>
                </tr>
                    <tr>
                <td colspan="2"><p class=data1>Date</p></td>
                <td><input name="birth" type="date" class="inputvalues" placeholder="enter Date" required></td>
                   </tr>
                </table>
                <table align=center>
                <tr>
                    <td><a href="debdeo.php"><button type="button" class="btn">Debtor</button></a></td>
                    
                    
                    
                    <td><a href="creditdeo.php"><button type="button" class="btn">Credit Card</button></a></td>
                    <td><a href="otherexpdeo.php"><button type="button" class="btn">Other Expences</button></a></td>
                </tr>
                    
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
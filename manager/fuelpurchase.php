<html>
    <head>
        <?php include '../include/header.php' ?>

        <title>fuel_purchase</title>
        
        <link rel="stylesheet" type="text/css" href="../CSS/style1.css"/>
        
    </head>
    
    <body class="log_body">
        
        <div id="box">
            <center><h2> Fuel Purchase </h2>

            <form action="reg.php" method="post">
                <table cellspacing="10">
                    <tr>
                <td><p class=data1>Date </p></td>
                <td><input name="date" type="date" class="inputvalues" placeholder="Enter date" required><br><br></td>
                    </tr>
                    <tr>
                <td><p class=data1>Amount Filled</p></td>
                <td><input name="Famount" type="text" class="inputvalues" placeholder="Enter filled amount" required><br><br></td>
                    </tr>
                    <tr>
                <td><p class=data1>Paid Amount</p></td>
                <td><input name="Pamount" type="text" class="inputvalues" placeholder="Enter paid amount" required><br><br></td>
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
<html>
    <head>
        <?php include 'include/header.php' ?>

        <title>Bank Details</title>
        
        <link rel="stylesheet" type="text/css" href="../CSS/style1.css"/>
        <link rel="stylesheet" type="text/css" href="../CSS/stylek.css"/>
        
    </head>
    
    <body class="image-slider">
        
        <div id="box">
            <center><h2> Bank Details  </h2>
            <form action="reg.php" method="post">
                <table cellspacing="10">
                    <tr>
                        <td ><p class=data1>Select Bank</p></td>
                        <td><select name="bank"  class="inputvalues" placeholder="Select Bank" required>
                               <option value="Sampath">Sampath</option>
                                <option value="DFCC">DFCC</option>
                            </select></td>
                    <tr>
                        <td ><p class=data1>Opening Date</p></td>
                        <td><input name="phone" type="date" class="inputvalues" placeholder="enter opening date" required></td>
                    </tr>
                    <tr>
                        <td><p class=data1>Closing Date</p></td>
                        <td><input name="birth" type="date" class="inputvalues" placeholder="enter closing date" required></td>
                    </tr>
                    <tr>
                    <td><a href="Cashiercash.php"><button type="button" class="btnc">View Bank Account </button></a></td>
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
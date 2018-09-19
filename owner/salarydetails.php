<html>
    <head>
        <?php include '../include/header.php' ?>

        <title>Salary</title>
        
        <link rel="stylesheet" type="text/css" href="../CSS/style1.css"/>
        
    </head>
    
    <body class="image-slider">
        
        <div id="box">
            <center><h2> Salary Details </h2>
<br>
<br>


            <form action="reg.php" method="post">
                <table cellspacing="10">
                    <tr>
                <td><p class=data1>Employee NIC</p></td>
                <td><input name="nic" type="text" class="inputvalues" placeholder=" Enter your NIC" required></td>
                    </tr>
          
		<tr>
                <td><p class=data1>Enter Date</p></td>
                <td><input name="date" type="date" class="inputvalues" placeholder="enter date" required></td>
                   </tr>
                    
                </table>
<br>
<br>


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
<html>
    <head>
        <?php include '../include/header.php' ?>

        <title>Home</title>
        
        <link rel="stylesheet" type="text/css" href="../CSS/style1.css"/>
        
    </head>
    
    <body class="image-slider">
        
        <div id="box">
            <center><h2> Register pump  </h2> 

            <form action="reg.php" method="post">
                <table cellspacing="10">
                    <tr>
                <td><p class=data1>Pump ID</p></td>
                <td><input name="cname" type="text" class="inputvalues" placeholder="Type Pump ID" required><br><br></td>
                    </tr>
                    <tr>
                <td><p class=data1>Fuel ID</p></td>
                <td><input name="cname" type="text" class="inputvalues" placeholder="Type Fuel ID" required>><br><br></td>
                    </tr>
                    <tr>
                <td><p class=data1>Tank ID</p></td>
                <td><input name="nic" type="text" class="inputvalues" placeholder="enter Tank ID" required>><br><br></td>
                    </tr>
                </table>
                    <table align=center cellspacing=20>
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
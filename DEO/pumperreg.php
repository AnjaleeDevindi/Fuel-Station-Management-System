<html>
    <head>
        <?php include '../include/header.php' ?>

        <title>Home</title>
        
        <link rel="stylesheet" type="text/css" href="../CSS/style1.css"/>
        
    </head>
    
    <body class="image-slider">
        
        <div id="box">
            <center><h2> Register pumper  </h2>

            <form action="reg.php" method="post">
                <table cellspacing="10">
                    <tr>
                <td><p class=data1>First Name</p></td>
                <td><input name="cname" type="text" class="inputvalues" placeholder="Type first name" required></td>
                    </tr>
                    <tr>
                <td><p class=data1>Last Name</p></td>
                <td><input name="cname" type="text" class="inputvalues" placeholder="Type last name" required><br></td>
                    </tr>
                    <tr>
                <td><p class=data1>NIC</p></td>
                <td><input name="nic" type="text" class="inputvalues" placeholder="enter nic number" required></td>
                    </tr>
                    <tr>
                <td><p class=data1>Address</p></td>
                <td><input name="email" type="text" class="inputvalues" placeholder="enter address" required></td>
                    </tr>
                    <tr>
                <td><p class=data1>Contact Number</p></td>
                <td><input name="phone" type="text" class="inputvalues" placeholder="enter contact number" required></td>
                </tr>
                    <tr>
                <td><p class=data1>Date of Birth</p></td>
                <td><input name="birth" type="date" class="inputvalues" placeholder="enter Date of Birth" required></td>
                </tr>
                </table>
                <table align=center cellspacing="20">
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
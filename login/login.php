<html>
    <head>
        <?php include '../include/header.php' ?>

        <title>Home</title>
        
        <link rel="stylesheet" type="text/css" href="../CSS/style1.css"/>
        
    </head>
    
    
    
    
    <body class="image-slider">

        <div id="box">
            <center><h2>Login</h2>


                <form action="login_submit.php" method="post">
                <p class="UNPW">Username</p>
                <input name="username" type="text" class="inputvalues" placeholder="Type your username" required><br>
                    
                <p class="UNPW">Password</p><br>
                <input name="password" type="password" class="inputvalues" placeholder="Type your password" required><br>
               
                <p>Select User Type</p>
                <input type="radio" name="usertype" value=" Owner" checked> Owner<br>
                <input type="radio" name="usertype" value="Data entry operator"> Data entry operator<br>
                <input type="radio" name="usertype" value="Manager"> Manager<br>
                
                <input type="radio" name="usertype" value="Cashier"> Cashier<br>
                <br>    
                <input type="submit" name="login"  class="loginbtn" value="Login"><br><br>
                

                </form>
            </center>
            
            </div>
        
    
 
        <?php include '../include/footer.php' ?>
  
    </body>
            
</html>
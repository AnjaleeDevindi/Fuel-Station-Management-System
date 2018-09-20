<html>
    <head>
        <?php include '../include/header.php' ?>

        <title>Manager Login</title>
        
        <link rel="stylesheet" type="text/css" href="../CSS/style1.css"/>
        
    </head>
    
    
    
    
    <body class="image-slider">

        <div id="box">
            <center><h2>Login</h2>


                <form action="loginManagervalidation.php" method="post">

                <p class="UNPW">Username</p>
                <input name="uName" type="text" class="inputvalues" placeholder="Type your username" required><br>
                    
                <p class="UNPW">Password</p><br>
                <input name="psw" type="password" class="inputvalues" placeholder="Type your password" required><br>
               
           
               
                <br>    
                <input type="submit" name="login"  class="loginbtn" value="Login"><br><br>
                
                

                </form>
            </center>
            
            </div>
        
   
 
        <?php include '../include/footer.php' ?>
  
    </body>
            
</html>
<html>
    <head>
        <?php include '../include/header.php' ?>

        <title>Home</title>
        
        <link rel="stylesheet" type="text/css" href="../CSS/style1.css"/>
        
    </head>
    
    
    
    
    <body class="image-slider">

        <div id="box">
            <center><h2>Login</h2>


                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <p class="UNPW">Username</p>
                <input name="username" type="text" class="inputvalues" placeholder="Type your username" required><br>
                    
                <p class="UNPW">Password</p><br>
                <input name="password" type="password" class="inputvalues" placeholder="Type your password" required><br>
               
             <!--   <?php
               if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  if (empty($_POST["usertype"])) {
                     $usertypeErr = "Gender is required";
                 } else {
                    $usertype = test_input($_POST["usertype"]);
                 }
                  if (empty($_POST["username"])) {
    $nameErr = "Usernameame is required";
  } else {
    $username = test_input($_POST["username"]);
  }
                 if (empty($_POST["password"])) {
    $passErr = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
  }
           }
              ?>
 -->
                <p>Select User Type</p>
                <input type="radio" name="usertype" <?php if (isset($usertype) && $usertype=="Owner") echo "checked";?> value="Owner" checked> Owner<br>
                <input type="radio" name="usertype" <?php if (isset($usertype) && $usertype=="DataEntry") echo "checked";?> value="Data entry operator"> Data entry operator<br>

                <input type="radio" name="usertype" <?php if (isset($usertype) && $usertype=="Manager") echo "checked";?> value="Manager"> Manager<br>
                
                <input type="radio" name="usertype" <?php if (isset($usertype) && $usertype=="Cashier") echo "checked";?> value="Cashier"> Cashier<br>
                <br>    
                <input type="submit" name="login"  class="loginbtn" value="Login"><br><br>
                

                </form>
            </center>
            
            </div>
        
    <?php

            include "../dbConnect/dbConnect.php";


            $username = $_POST["username"];
            $password = $_POST["password"];
            $usertype = $_POST["usertype"];
            // echo $u;
            // echo $p;

            $conn = dbConnect();



            $sql = "SELECT UserName, Password FROM $usertype WHERE UserName= '$username' AND password = '$password'";

            $result = mysqli_query($conn , $sql);

            $count = mysqli_num_rows($result);

            $_SESSION["name"] = $username;
            echo $_SESSION["name"];

            // if($count == 1){
            //     session_start();
            //     // $_SESSION["id"] = "UCSC";
            //     $_SESSION["name"] = $username;
            //     echo $_SESSION["name"];
            //     echo "<script>window.alert('Login Successful !');
            //     window.location='member.php'</script>";
                
            // }
            // else{
            //     echo "<script>window.alert('Invalid details please try again !');
            //     window.location='login.php'</script>";
            // }

        ?>
 
        <?php include '../include/footer.php' ?>
  
    </body>
            
</html>
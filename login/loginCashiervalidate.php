<html>
<head>
  <title>Login</title>
</head>
<body>
   <?php

      // include "../dbConnect/dbConnect.php";

$servername ="localhost";
$username= "root";
$password="";
$dbname="Group";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn -> connect_error){
    die("Connection failed" .$conn->connect_error);
}
      // $u = $_POST["uName"];
      // $p = $_POST["psw"];

      // // echo $u;
      // // echo $p;

      // $conn = dbConnect();



      // $sql = "SELECT UserName, Password FROM user WHERE UserName = '$u' AND Password = '$p'";

      // $result = mysqli_query($conn , $sql);

      // $count = mysqli_num_rows($result);

      // $_SESSION["name"] = $u;
      // echo $_SESSION["name"];

      // if($count == 1){
      //   session_start();
      //   // $_SESSION["id"] = "UCSC";
      //   $_SESSION["name"] = $u;
      //   echo $_SESSION["name"];
      //   echo "<script>window.alert('Login Successful !');
      //     window.location='../DEO/DEO.php'</script>";
        
      // }
      // else{
      //   echo "<script>window.alert('Invalid details please try again !');
      //     window.location='loginDEO.php'</script>";
      // }

      if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $user = $_POST['uName'];
    $pass = $_POST['psw'];

}

$sql= "SELECT * FROM Cashier WHERE username= '$user'";

$result = $conn->query($sql);

if($result->num_rows> 0){
    $row=$result->fetch_assoc();

    if($row['UserName']==$user)

        if($row['Password']==$pass){
            session_start();

            $_SESSION['name']= $row['bussiness_name'];
            $_SESSION['uname']= $row['username'];
            $_SESSION['id']= $row['id'];
            echo "<script>window.alert('Login Successful !');
          window.location='../cashier/cashierhome.php'</script>";
        
            // header('location:../DEO/DEO.php');
        }else{
            echo "Password incorrect";
        }
}else {
    echo "<script>window.alert('Invalid details please try again !');
          window.location='loginCashier.php'</script>";
    // echo "Username incorrect";

}


    ?>
 
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
		<?php

			include "../dbConnect/dbConnect.php";


			$NIC = $_POST["nic"];
			$password = $_POST["password"];
			// $type=$_POST["type"];

			// echo $u;
			// echo $p;

			$conn = dbConnect();



			$sql = "SELECT NIC, Password,Type FROM Employee WHERE NIC = '$NIC' AND Password = '$password' ";

			$result = mysqli_query($conn , $sql);

			$count = mysqli_num_rows($result);

			// $type=Type;
			$_SESSION["Type"]=$Type;
			
			$_SESSION["NIC"] = $NIC;
			// echo $_SESSION["name"];

			if($count == 1){
				session_start();
				$_SESSION["Password"] = "$password";
				$_SESSION["NIC"] = "$NIC";
				$_SESSION["Type"]="Type";
				// echo $_SESSION["name"];

				if(Type=="Data Entry Operator"){
				echo "<script>window.alert('Login Successful !');
    			window.location='DEO/deoindex.php'</script>";
				}
				elseif($type=="Manager"){
				echo "<script>window.alert('Login Successful !');
    			window.location='manager/managerindex.php'</script>";
				}
				elseif($type=="Cashier"){
				echo "<script>window.alert('Login Successful !');
    			window.location='cashier/cashierindex.php'</script>";
				}
				elseif($type=="Owner"){
				echo "<script>window.alert('Login Successful !');
    			window.location='owner/ownerindex.php'</script>";
				}
				else{
				echo "<script>window.alert('Invalid details please try again !');
    			window.location='login.php'</script>";
			}
			}
		
		?>
</body>
</html>


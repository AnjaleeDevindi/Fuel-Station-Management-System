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
			
            echo "$NIC";
			$conn = dbConnect();



			$sql = "SELECT NIC, Password,Type FROM Employee WHERE NIC = '$NIC' AND Password = '$password' ";

			$result = mysqli_query($conn , $sql);

			$count = mysqli_num_rows($result);
			echo '"Count".$count';


			if($count == 1){

				 while($row=$result->fetch_assoc()){
				 	$NIC = $row['NIC'];
				 	$Type = $row['Type'];
               }

   			$conn -> close();
   			echo "$Type";
				session_start();
				//$_SESSION["Password"] = "$password";
				$_SESSION["isLogged"] = True;
				$_SESSION["Type"]= $Type;
				// echo $_SESSION["name"];
                echo "$Type";
				if(strcmp($Type,"Data Entry Operator")){
					echo "$Type";
				echo "<script>window.location='DEO/deoindex.php'</script>";
				}
				elseif(strcmp($Type,"Manager")){
					echo "$Type";
				echo "<script>window.location='manager/managerindex.php'</script>";
				}
				elseif(strcmp($Type,"Cashier")){
					echo "$Type";
				echo "<script>window.location='cashier/cashierindex.php'</script>";
				}
				elseif(strcmp($Type,"Owner")){
					echo "$Type";
				echo "<script>window.location='owner/ownerindex.php'</script>";
				}

				}else{
					echo "$Type";
				echo "<script>window.alert('Invalid details please try again !');
    			window.location='login.php'</script>";
			}


			
		
		?>
</body>
</html>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
		<?php

		   session_start();

			include "../dbConnect/dbConnect.php";


			$NIC = $_POST["nic"];
			$password = $_POST["password"];
			
           
			$conn = dbConnect();



			$sql = "SELECT NIC, Password,Type FROM Employee WHERE NIC = '$NIC' AND Password = '$password' ";

			$result = mysqli_query($conn , $sql);

			$count = mysqli_num_rows($result);
			


			if($count == 1){

				 while($row=$result->fetch_assoc()){
				 	$NIC = $row['NIC'];
				 	$Type = $row['Type'];
               }

   			$conn -> close();
   			
				
				//$_SESSION["Password"] = "$password";
				$_SESSION['isLogged'] = True;
				$_SESSION['Type']= $Type;
				// echo $_SESSION["name"];
                // echo "$Type";
                echo "Session".$_SESSION['isLogged'];
				if($Type == 1){
					// echo "InDEO".$Type;
				echo "<script>window.location='DEO/deoindex.php'</script>";
				}
				elseif($Type == 2){
					// echo "InManager".$Type;
				echo "<script>window.location='manager/managerindex.php'</script>";
				}
				elseif($Type == 3){
					// echo "InCashier".$Type;
				echo "<script>window.location='cashier/cashierindex.php'</script>";
				}
				elseif($Type == 4){
					// echo "InOwner".$Type;
				echo "<script>window.location='owner/ownerindex.php'</script>";
				}

				}else{
					// echo "Invalid".$Type;
				echo "<script>window.alert('Invalid details please try again !');
    			window.location='login.php'</script>";
			}


			
		
		?>
</body>
</html>


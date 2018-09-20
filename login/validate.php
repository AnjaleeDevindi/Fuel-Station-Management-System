<html>
<head>
	<title>Login</title>
</head>
<body>
		<?php

			include "../dbConnect/dbConnect.php";


			$u = $_POST["uName"];
			$p = $_POST["psw"];

			// echo $u;
			// echo $p;

			$conn = dbConnect();



			$sql = "SELECT UserName, Password FROM  WHERE userid = '$u' AND password = '$p'";

			$result = mysqli_query($conn , $sql);

			$count = mysqli_num_rows($result);

			$_SESSION["name"] = $u;
			echo $_SESSION["name"];

			if($count == 1){
				session_start();
				$_SESSION["id"] = "UCSC";
				$_SESSION["name"] = $u;
				echo $_SESSION["name"];
				echo "<script>window.alert('Login Successful !');
    			window.location='member.php'</script>";
				
			}
			else{
				echo "<script>window.alert('Invalid details please try again !');
    			window.location='login.php'</script>";
			}

		?>
</body>
</html>
<html>
	<head>
		<title>Salary Advance</title>
	</head>
	<body>
		 
		<?php
		
		


		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

			include "../../dbConnect/dbConnect.php";
			$conn = dbConnect();
			
			$EmpId=$_POST['empid'];
			
			$Advance=$_POST['advance'];
			$Date=$_POST['date'];
			


			$sql="INSERT INTO Advance(EmpId,Advance,FromMonth) VALUES ('$EmpId','$Advance','$Date')";
			
			
				if ($conn->query($sql) === TRUE) {
    			echo "<script>window.alert('Successfully added !');
    			window.location='advance.php'</script>";

		} else {
    			echo "Error: " . $sql . "<br>" . $conn->error;
		}
				$conn -> close();

		}
	?>

		
	</body>
</html>


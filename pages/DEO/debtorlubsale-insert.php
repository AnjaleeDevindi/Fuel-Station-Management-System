<html>
	<head>
		<title>Debtor Lubricant Sale</title>
	</head>
	<body>
		 
		<?php
		
		


		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

			include "../../dbConnect/dbConnect.php";
			$conn = dbConnect();
			
			$DebtorId=$_POST['debtorid'];
			$LubricantId=$_POST['lubricantid'];
			$Amount=$_POST['amount'];
			$Date=$_POST['date'];
			
			$Time=$_POST['time'];
			
			

			$sql="INSERT INTO DebtorLubSale(DebtorId,LubricantId,Amount,Date,Time) VALUES ('$DebtorId','$LubricantId','$Amount','$Date','$Time')";
			
			
				if ($conn->query($sql) === TRUE) {
    			echo "<script>window.alert('Successfully added !');
    			window.location='debtorlubsale.php'</script>";

		} else {
    			echo "Error: " . $sql . "<br>" . $conn->error;
		}
				$conn -> close();

		}
	?>

	</body>
</html>


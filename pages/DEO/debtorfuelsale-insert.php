<html>
	<head>
		<title>Debtor Fuel Sale</title>
	</head>
	<body>
		 
		<?php
		
		


		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

			include "../../dbConnect/dbConnect.php";
			$conn = dbConnect();
			
			$DebtorId=$_POST['debtorid'];
			$FuelId=$_POST['fuelid'];
			$PumpId=$_POST['pumpid'];
			$Date=$_POST['date'];
			$Amount=$_POST['amount'];
			$Time=$_POST['time'];
			
			

			$sql="INSERT INTO DebtorFuelSale(DebtorId,FuelId,PumpId,Date,Amount,Time) VALUES ('$DebtorId','$FuelId','$PumpId','$Date','$Amount','$Time')";
			
			
				if ($conn->query($sql) === TRUE) {
    			echo "<script>window.alert('Successfully added !');
    			window.location='debtorfuelsale.php'</script>";

		} else {
    			echo "Error: " . $sql . "<br>" . $conn->error;
		}
				$conn -> close();

		}
	?>

	</body>
</html>


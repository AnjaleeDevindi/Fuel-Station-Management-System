<html>
	<head>
		<title>Purchase_Fuel</title>
	</head>
	<body>
		 




<?php
		
		


		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

			include "../../dbConnect/dbConnect.php";
			$conn = dbConnect();
			
			$Date=$_POST['date'];
			$Time=$_POST['time'];
			$FuelId=$_POST['fid'];
			$FuelAmount=$_POST['fuelamount'];
			$TotalPrice=$_POST['totalprice'];
			$BowserNo=$_POST['bowserNo'];
			$InvoiceNo=$_POST['invoiceNo'];

			

			$sql="INSERT INTO fuelpurchase(FuelId, Date, Time, FuelAmount, TotalPrice, BowserNo, InvoiceNo) VALUES ('$FuelId', '$Date', '$Time','$FuelAmount','$TotalPrice', '$BowserNo','$InvoiceNo')";
			
			
				if ($conn->query($sql) === TRUE) {
    			echo "<script>window.alert('Successfully added !');
    			window.location='purfuel.php'</script>";

		} else {
    			echo "Error: " . $sql . "<br>" . $conn->error;
		}
				$conn -> close();

		}
	?>
</body>
</html>

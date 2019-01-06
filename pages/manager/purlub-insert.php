<html>
	<head>
		<title>Purchase_Lub</title>
	</head>
	<body>
		 




<?php
		
		


		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

			include "../../dbConnect/dbConnect.php";
			$conn = dbConnect();
			
			$LubId=$_POST['lubid'];
			$Date=$_POST['date'];
			$TotalPrice=$_POST['amount'];
			$Quantity=$_POST['quantity'];
			$InvoiceNo=$_POST['invoiceNo'];
			

			$sql = "INSERT INTO lubricantpurchase(LubricantId, Date, TotalPrice, Quantity, InvoiceNo) VALUES ('$LubId', '$Date', '$TotalPrice','$Quantity','$InvoiceNo')";
			
			
				if ($conn->query($sql) === TRUE) {
    			echo "<script>window.alert('Successfully added !');
    			window.location='purlub.php'</script>";

		} else {
    			echo "Error: " . $sql . "<br>" . $conn->error;
		}
				$conn -> close();

		}
	?>
</body>
</html>

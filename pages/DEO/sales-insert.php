<html>
	<head>
		<title>Register Pumper</title>
	</head>
	<body>
		 
		<?php
		
		


		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

			include "../../dbConnect/dbConnect.php";
			$conn = dbConnect();
			
			$PumpId=$_POST['pumpid'];
			$PumperId=$_POST['pumperid'];
			$CMreading=$_POST['cmreading'];
			$Stime=$_POST['stime'];
			$Etime=$_POST['etime'];
			$Date=$_POST['date'];
			$DebtorSales=$_POST['debtorsales'];
			$Cardsales=$_POST['cardsales'];
			$Short=$_POST['short'];
			

			$sql="INSERT INTO FuelSale(PumpId,PumperId,CMReading,Stime,Etime,Date,DebtorSales,CreditCard,Shortages) VALUES ('$PumpId','$PumperId','$CMreading','$Stime','$Etime','$Date','$DebtorSales','$CardSales','$Short')";
			
			
				if ($conn->query($sql) === TRUE) {
    			echo "<script>window.alert('Successfully added !');
    			window.location='salesdeo.php'</script>";

		} else {
    			echo "Error: " . $sql . "<br>" . $conn->error;
		}
				$conn -> close();

		}
	?>

		 <?php
               if(isset($_SESSION['name'])){
                    if($_SESSION['name'] != null){
        ?>
        <label id='helloLabel' >Hello 

        <?php
             echo $_SESSION['name'] ?>
                 
             </label>
             <?php
                    }
               }
                
        ?>
	</body>
</html>


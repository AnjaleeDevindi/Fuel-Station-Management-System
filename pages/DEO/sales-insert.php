<html>
	<head>
		<title>Fuel_Sales</title>
	</head>
	<body>
		 
		<?php
		
		


		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

			include "../../dbConnect/dbConnect.php";
			$conn = dbConnect();
			
			$PumpId=$_POST['pumpid'];
			$PumperId=$_POST['pumperid'];
			$FuelId=$_POST['fuelid'];
			$CMreading=$_POST['cmreading'];
			$OpenReading=$_POST['openingreading'];
			$Stime=$_POST['stime'];
			$Etime=$_POST['etime'];
			$Date=$_POST['date'];
			$DebtorSales=$_POST['debtorsales'];
			$Cardsales=$_POST['cardsales'];
			$Short=$_POST['short'];
			$TotAmnt = 0;
			
			$sql = "SELECT UnitPrice FROM fuelprice WHERE 	(FuelId = '$FuelId' AND UnitPricedDate = '$Date') ";
			$result = $conn->query($sql);
        
           

			if ($result->num_rows > 0) {
    			// output data of each row
    			while($row = $result->fetch_assoc()) {
        			$TotAmnt = ($CMreading - $OpenReading - $Short) * $row["UnitPrice"] ;
    			}

    			$sql="INSERT INTO FuelSale(PumpId,PumperId,OMReading,CMReading,Stime,Etime,Date,DebtorSales,CardSales,Shortages,TotalAmount) VALUES ('$PumpId','$PumperId','$OpenReading','$CMreading','$Stime','$Etime','$Date','$DebtorSales','$Cardsales','$Short','$TotAmnt')";
			
			
				if ($conn->query($sql) === TRUE) {
    			echo "<script>window.alert('Successfully added !');
    			window.location='salesdeo.php'</script>";

		} else {
    			echo "Error: " . $sql . "<br>" . $conn->error;
		}
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


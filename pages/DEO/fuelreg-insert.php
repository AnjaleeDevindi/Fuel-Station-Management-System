<html>
	<head>
		<title>Fuel Register</title>
	</head>
	<body>
		 
		<?php
		
		


		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

			include "../../dbConnect/dbConnect.php";
			$conn = dbConnect();
			
			$FuelId=$_POST['fuelid'];
			$FuelType=$_POST['fueltype'];
			$UnitPrice=$_POST['unitprice'];
			$UpDate=$_POST['unitpriceddate'];
			


			$sql="INSERT INTO Fuel(FuelId,Name,UnitPrice,UnitPricedDate) VALUES ('$FuelId','$FuelType','$UnitPrice','$UpDate')";
			
			
				if ($conn->query($sql) === TRUE) {
    			echo "<script>window.alert('Successfully added !');
    			window.location='fuelregdeo.php'</script>";

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


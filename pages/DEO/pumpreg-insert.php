<html>
	<head>
		<title>Register Pump</title>
	</head>
	<body>
		 
		<?php
		
		


		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

			include "../../dbConnect/dbConnect.php";
			$conn = dbConnect();
			
			$PumpId=$_POST['pumpid'];
			
			$TankId=$_POST['tankid'];
			

			$sql="INSERT INTO Pump(PumpId,TankId) VALUES ('$PumpId','$TankId')";
			
			
				if ($conn->query($sql) === TRUE) {
    			echo "<script>window.alert('Successfully added !');
    			window.location='pumpregdeo.php'</script>";

		} else {
    			echo "Error: " . $sql . "<br>" . $conn->error;
		}
				$conn -> close();

		}
	?>

		<!--  <?php
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
                
        ?> -->
	</body>
</html>


<html>
	<head>
		<title>Register Lubricant</title>
	</head>
	<body>
		 
		<?php
		
		


		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

			include "../../dbConnect/dbConnect.php";
			$conn = dbConnect();
			
			$LubId=$_POST['lubid'];
			$Date=$_POST['date'];
			$Time=$_POST['time'];
			$NOIe=$_POST['noi'];
			$TotAmnt = 0;
			echo "$Date";

			$sql = "SELECT UnitPrice FROM lubricantprice WHERE (LubricantId = '$LubId' AND UnitPricedDate = '$Date') ";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {

    			// output data of each row
    			while($row = $result->fetch_assoc()) {
    				$Price = $row["UnitPrice"];
    				echo "$Price";
        			$TotAmnt = $row["UnitPrice"] * $NOIe;
    			}

    			$sql="INSERT INTO Lubricantsale(LubricantId,Date,Time,NoOfItems,TotalAmount) VALUES ('$LubId','$Date','$Time','$NOIe','$TotAmnt')";
			
			
				if ($conn->query($sql) === TRUE) {
    			echo "<script>window.alert('Successfully added !');
    			window.location='lubsales.php'</script>";

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


<html>
	<head>
		<title>Register Lubricant Price</title>
	</head>
	<body>
		 
		<?php
		
		


		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

			include "../../dbConnect/dbConnect.php";
			$conn = dbConnect();
			
			$LubId=$_POST['lubid'];
			
			$UnitPrice=$_POST['uprice'];
			$UpDate=$_POST['update'];
			


			$sql="INSERT INTO LubricantPrice(LubricantId,UnitPrice,UnitPricedDate) VALUES ('$FuelId','$UnitPrice','$UpDate')";
			
			
				if ($conn->query($sql) === TRUE) {
    			echo "<script>window.alert('Successfully added !');
    			window.location='lubregprice.php'</script>";

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


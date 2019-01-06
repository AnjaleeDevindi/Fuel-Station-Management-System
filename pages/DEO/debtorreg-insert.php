<html>
	<head>
		<title>Register Debtors</title>
	</head>
	<body>
		 
		<?php
		
		


		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

			include "../../dbConnect/dbConnect.php";
			$conn = dbConnect();
			
			$DebtorId=$_POST['debtorid'];
			$DebtorName=$_POST['debtorname'];
			$Address=$_POST['address'];
			$Cno=$_POST['contactnumber'];
			$Email=$_POST['email'];


			$sql="INSERT INTO Debtor(DebtorId,DebtorName,Address,TelephoneNo,Email) VALUES ('$DebtorId','$DebtorName','$Address','$Cno','$Email')";
			
			
				if ($conn->query($sql) === TRUE) {
    			echo "<script>window.alert('Successfully added !');
    			window.location='debtorregdeo.php'</script>";

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

        <!-- <?php
             echo $_SESSION['name'] ?>
                 
             </label>
             <?php
                    }
               }
                
        ?> -->
	</body>
</html>


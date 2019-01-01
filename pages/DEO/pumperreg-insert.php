<html>
	<head>
		<title>Register Pumper</title>
	</head>
	<body>
		 
		<?php
		
		


		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

			include "../../dbConnect/dbConnect.php";
			$conn = dbConnect();
			
			$NIC=$_POST['nic'];
			$PumperId=$_POST['pumperid'];
			$FirstName=$_POST['firstname'];
			$LastName=$_POST['lastname'];
			$DOB=$_POST['dob'];
			$Address=$_POST['address'];
			$cno=$_POST['cno'];
			$Basicsalary=$_POST['basicsalary'];
			$Allowances=$_POST['allowances'];
			

			$sql="INSERT INTO Pumper(NIC,PumperId,FirstName,LastName,DOB,Address,TelephoneNo,BasicSalary,Allowances) VALUES ('$NIC','$PumperId,'$FirstName','$LastName','$DOB','$Address','$cno','$Basicsalary','Allowances')";
			
			
				if ($conn->query($sql) === TRUE) {
    			echo "<script>window.alert('Successfully added !');
    			window.location='pumperregdeo.php'</script>";

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


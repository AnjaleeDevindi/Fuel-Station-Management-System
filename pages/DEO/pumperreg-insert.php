<html>
	<head>
		<title>Register_Pumper</title>
	</head>
	<body>
		 
		<?php
		
		


		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

			include "../../dbConnect/dbConnect.php";
			$conn = dbConnect();
			
			$NIC=$_POST['nic'];
			$EmpId=$_POST['empid'];
			$FirstName=$_POST['firstname'];
			$LastName=$_POST['lastname'];
			$DOB=$_POST['dob'];
			$Address=$_POST['address'];
			$cno=$_POST['cno'];
			$Basicsalary=$_POST['basicsalary'];
			$Allowances=$_POST['allowances'];
			$OTRate=$_POST['otrate'];

			

			$sql="INSERT INTO pumper(NIC,EmpId,FirstName,LastName,DOB,Address,TelephoneNo,BasicSalary,Allowances,OTRate) VALUES ('$NIC','$EmpId','$FirstName','$LastName','$DOB','$Address','$cno','$Basicsalary','$Allowances','$OTRate')";
			
			
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


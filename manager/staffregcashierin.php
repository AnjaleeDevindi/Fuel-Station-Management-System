<html>
	<head>
		<title>Cashier Signup</title>
	</head>
	<body>
		 
		<?php
		
		


		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

			include "../dbConnect/dbConnect.php";
			$conn = dbConnect();
			
			$NIC=$_POST['nic'];
			$Fname=$_POST['fname'];
			$Lname=$_POST['lname'];
			$Telephone=$_POST['phone'];
			$Address=$_POST['address'];
			$Username=$_POST['username'];
			$Password=$_POST['password'];
			


			$sql="INSERT INTO user(NIC,FirstName,LastName,TelephoneNo,Address,UserName,Password) VALUES ('$NIC','$Fname','$Lname','$Telephone','$Address','$Username','$Password')";
			
			
				if ($conn->query($sql) === TRUE) {
    			echo "<script>window.alert('Successfully added !');
    			window.location='registeras.php'</script>";

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


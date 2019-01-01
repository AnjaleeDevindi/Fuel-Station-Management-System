<html>
	<head>
		<title>Register Staff</title>
	</head>
	<body>
		 
		<?php
		
		


		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

			include "../../dbConnect/dbConnect.php";
			$conn = dbConnect();
			
			$NIC=$_POST['NIC'];
			$fname=$_POST['firstname'];
			$lname=$_POST['lastname'];
			$cno=$_POST['contactnumber'];
			$address=$_POST['address'];
			$dob=$_POST['dob'];
			$email=$_POST['email'];
			$type=$_POST['type'];
			$uname=$_POST['username'];
			$password=$_POST['password'];
			


			$sql="INSERT INTO Employee(NIC,FirstName,LastName,Telephone,Address,DOB,Email,Type,Username,Password) VALUES ('$NIC','$fname','$lname','$cno','$address','$dob','$email','$type','$uname','$password')";
			
			
				if ($conn->query($sql) === TRUE) {
    			echo "<script>window.alert('Successfully added !');
    			window.location='regstaffman.php'</script>";

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


<html>
	<head>
		<title>Salary Details</title>
	</head>
	<body>
		 
		<?php
		
		


		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

			include "../../dbConnect/dbConnect.php";
			$conn = dbConnect();
			
			$EmpId=$_POST['empid'];
			$Date=$_POST['date'];
			$ITime=$_POST['itime'];
			$OTime=$_POST['otime'];
			$Shortages;
			                               
			$WorkHour=$OTime-$ITime;
    
            $sql1="SELECT Shortages from CashierSale Where EmpId='$EmpId'";
             $result1=$conn->query($sql1);
             if($result1->num_rows>0){
    		while($row=$result1->fetch_assoc()){
   			 $Shortages=$row['Shortages'];



			$sql="INSERT INTO SalaryDetails(EmpId,Date,InTime,OutTime,WorkHour,Shortges) VALUES ('$EmpId','$Date','$ITime','$OTime','$WorkHour','$Shortages')";
			
			
				if ($conn->query($sql) === TRUE) {
    			echo "<script>window.alert('Successfully added !');
    			window.location='salarydetails.php'</script>";

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


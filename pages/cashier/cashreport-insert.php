<html>
	<head>
		<title>Amount To Be Recieved</title>
	</head>
	<body>



		
		 
		<?php
        
        


       
             if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            include "../../dbConnect/dbConnect.php";
            $conn = dbConnect();
            $EmpId=$_POST['empid'];
            $Date=$_POST['date'];
           $ToBeRecieved;
             
            

            
             $count=0;
   
    $sql="SELECT ToBeRecieved from FuelSale where PumperId='$EmpId' and Date='$Date'";
     $result=$conn->query($sql);


    if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    $ToBeRecieved=$row['ToBeRecieved'];
                    //$TotToBeRecieved=$TotToBeRecieved+$n;
 
                   // $count++; 
                   
                }
                }

                $sql="INSERT INTO CashierSale(Date,PumperId,ToBeRecieved) VALUES ('$Date','$EmpId','$TotToBeRecieved')";

                 if ($conn->query($sql) === TRUE) {
                echo "<script>window.alert('Successfully added !');
                window.location='cashierreportamount.php'</script>";

        } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
        }
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }


			
			


                ?>
	</body>
</html>


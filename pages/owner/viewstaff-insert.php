<html>
<head>
	<style>
		table, th, td {
    		border: 2px solid black;
		}
	</style>
</head>
	<body>
        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                include "../../dbConnect/dbConnect.php";
                $conn = dbConnect();

               $sql = "SELECT NIC, EmpId, FirstName, LastName, DOB, Address, TelephoneNo, BasicSalary, Allowances, OTRate FROM pumper ";
                $result = $conn->query($sql);
                

                // echo "<table><tr><th>NIC</th><th>PumperId</th><th>Name</th><th>DOB</th><th>Address</th><th>TelephoneNo</th><th>BasicSalary</th><th>Allowances</th><th>OTRate</th></tr>";

                if ($result->num_rows > 0) {
                    $_POST['data_rows'] = $result;
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    $EmpId = $row["EmpId"];
                    echo "$EmpId";
                     $data =  $row["EmpId"];
                    echo "<script>
                window.location='viewstaff.php'
                </script>";

                    // echo "<tr><td>" . $row["NIC"]. "</td><td>" . $row["EmpId"]. "</td><td>" . $row["FirstName"]. " " . $row["LastName"]. "</td><td>" . $row["DOB"]. "</td><td>" . $row["Address"]. "</td><td>" . $row["TelephoneNo"]. "</td><td>" . $row["BasicSalary"]. "</td><td>" . $row["Allowances"]. "</td><td>" . $row["OTRate"]. "</td></tr>";
                }
                // echo "</table>";
            }


            }

        ?>


</body>
</html>
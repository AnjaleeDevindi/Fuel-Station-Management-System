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

echo"<center><b>Details of Pumpers</b></center>"

$sql = "SELECT NIC, EmpId, FirstName, LastName, DOB, Address, TelephoneNo, BasicSalary, Allowances, OTRate FROM pumper";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>NIC</th><th>PumperId</th><th>Name</th><th>DOB</th><th>Address</th><th>TelephoneNo</th><th>BasicSalary</th><th>Allowances</th><th>OTRate</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["NIC"]. "</td><td>" . $row["EmpId"]. "</td><td>" . $row["FirstName"]. " " . $row["LastName"]. "</td><td>" . $row["DOB"]. "</td><td>" . $row["Address"]. "</td><td>" . $row["TelephoneNo"]. "</td><td>" . $row["BasicSalary"]. "</td><td>" . $row["Allowances"]. "</td><td>" . $row["OTRate"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}





echo"<center><b>Details of Other Employees</b></center>"

$sql = "SELECT NIC, EmpId, FirstName, LastName, DOB, Address, TelephoneNo, BasicSalary, Allowances, OTRate FROM employee";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>NIC</th><th>PumperId</th><th>Name</th><th>DOB</th><th>Address</th><th>TelephoneNo</th><th>BasicSalary</th><th>Allowances</th><th>OTRate</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["NIC"]. "</td><td>" . $row["EmpId"]. "</td><td>" . $row["FirstName"]. " " . $row["LastName"]. "</td><td>" . $row["DOB"]. "</td><td>" . $row["Address"]. "</td><td>" . $row["TelephoneNo"]. "</td><td>" . $row["BasicSalary"]. "</td><td>" . $row["Allowances"]. "</td><td>" . $row["OTRate"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}






$conn->close();
?> 

</body>
</html>
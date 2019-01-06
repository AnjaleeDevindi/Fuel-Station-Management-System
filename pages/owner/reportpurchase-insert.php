<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>

<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

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


$conn->close();
?> 

</body>
</html>




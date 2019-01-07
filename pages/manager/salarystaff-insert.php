<html>
	<head>
		<title>Register_Fuel</title>
	</head>
	<body>



		
		<?php 
// include 'LoanAdvance.php' 







 if ($_SERVER['REQUEST_METHOD'] == 'POST') {

			include "../../dbConnect/dbConnect.php";
			$conn = dbConnect();
			


 
	

	global $db;
	
	
		// $emp_id=0;
	
		$from = $_POST['from'];
	 	$to = $_POST['to'];
	 	$empid = $_POST['empid'];

	 	

	 	//display specific empid salary or all salary
	 		if($empid === "all"){
	 			$empquery = "SELECT EmpId FROM Pumper";

	 		}
	 		else{
	 		$empquery ="SELECT EmpId FROM Pumper WHERE EmpId='$empid'";
		 	}
		 	$result=$conn->query($empquery);
		 	if($result->num_rows>0){
		 	while ($employee = $result->fetch_assoc() ){
		 		$emp_id=$employee['EmpId'];

	 	
		//date format change	
		$from = date_format(date_create($from), "y-m-d");
		$to = date_format(date_create($to), "y-m-d");
		
		

	
		
		//caculating employee working hours per specific period
		$working_hours="SELECT WorkHour FROM salarydetails WHERE Date BETWEEN '$from' AND '$to' AND EmpId='$empid'";
		$emphours = 0;
		$days = 0;
		$result=$conn->query($working_hours);
		 	if($result->num_rows>0){
		 	while ($employee = $result->fetch_assoc() ){
		 		$emphours += $employee['WorkHour'];
			$days++;

		 		// $emp_id=$employee['WorkHour'];


		


			if ($days>31){
				break;
		    } 
			
		
		}
}
		
		//retrieve basic salary & allowence from pumper
	 
		$basic_salary = "SELECT BasicSalary FROM pumper WHERE EmpId =$emp_id";
		$allowence_data = "SELECT Allowances FROM pumper WHERE EmpId =$emp_id";

	
	
		$advance = 0;
		$loan=0;
		

	      $result2=$conn->query($basic_salary);
	      if ($result2->num_rows > 0) {
                // output data of each row
                while($row = $result2->fetch_assoc()) {
                    $basic_salary2=$row['BasicSalary'];
                    //$TotToBeRecieved=$TotToBeRecieved+$n;
 
                   // $count++; 
                   
                }
                }

                $result2=$conn->query($allowence_data);
	      if ($result2->num_rows > 0) {
                // output data of each row
                while($row = $result2->fetch_assoc()) {
                   $allowence=$row['Allowances'];
                    //$TotToBeRecieved=$TotToBeRecieved+$n;
 
                   // $count++; 
                   
                }
                }


   
		
		


		


		//retrieve salary advance 
		$advance="SELECT Advance FROM advance WHERE FromMonth BETWEEN '$from' AND '$to' AND EmpId=$emp_id";

		$advance1=0;
		$loan1=0;
$result1=$conn->query($advance);
if ($result1->num_rows > 0) {
                // output data of each row
                while($row = $result1->fetch_assoc()) {
                    $advance1=$row['Advance'];
                    //$TotToBeRecieved=$TotToBeRecieved+$n;
 
                   // $count++; 
                   
                }
                }


	//retrieve shortages
	


	//calculate overtime and nopay
	$nopay=0;
	$ot=0;

    if ($emphours<208){
        $perhour=$basic_salary2/208;
        $nopay =($emphours-208)*$perhour;
        $nopay = number_format((float)$nopay, 2, '.', '');  
        if ($nopay<0){
				break;
		    } 
    }
    else{
        $perhour=$basic_salary2/208;
        $overtime = $perhour*1.5;
        $ot = $overtime*($emphours-208);
        $ot = number_format((float)$ot, 2, '.', '');  
    }
	
	//calculate gross salary
	$gross = $basic_salary2 + $allowence  + $nopay + $ot; 
	$gross = number_format((float)$gross, 2, '.', ''); 

	//calculate EPF employees contribution
	$epf = $basic_salary2*0.08;
	$epf = number_format((float)$epf, 2, '.', '');  

	//calcutale Net salary
	$net= $gross-($epf+$advance1);
	$net = number_format((float)$net, 2, '.', '');  



     


	



   
		echo "<div class='table'>
		<table>
		     <tr>
		         <th>Employee ID</th>
			     <th>Basic Salary</th>
			     <th>Allownce</th>
			     <th>Nopay</th>
				 <th>OT</th>
			     <th>Gross Salary</th>
			     <th>EPF 8%</th>
			     <th>Advance</th>
			     
			     <th>Net Salary</th>
			 </tr>";
			 
			
				 echo"<tr>
		             <td>".$emp_id."</td>
			         <td>".$basic_salary2."</td>
			         <td>".$allowence."</td>
			         <td>".$nopay."</td>
			         <td>".$ot."</td>
					 <td>".$gross."</td>
					 <td>".$epf."</td>
					 <td>".$advance1."</td>
					
					 <td>".$net."</td>

			 </tr>";
			 
			 echo "</table>
			 </div>";  
			 }
			 }
			 
        }
?>
	</body>
</html>


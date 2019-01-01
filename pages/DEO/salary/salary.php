<!DOCTYPE html>
<html>
<head>
	<title>Salary</title>
</head>
<body>
	<div id="wrapper">

        

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data entry Operator</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Cash Sales
                        </div>
                        <!-- /.panel-heading -->
                        <div class=panelbody>
  <form width=70% method="post" action="salary.php">
    <label for="fid">From</label><br>
    <input type="date" id="fname" name="from" placeholder="Please select 1st day of required month"><br>

     <label for="fid">To</label><br>
    <input type="date" id="fname" name="to" placeholder="Please select last day of required month"><br>

    
    
  <center>
      
     
 <!--     <a href="debtordeo.php"><button type="button" class="btn">Debtor</button></a>
 -->      
      
    <input type="submit" name="submit" value="Submit"></center>
  </form>
</div>

                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
                
                <!-- /.col-lg-6 -->
                
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>




</body>
</html>>













<?php
//if upload button pressed


 $db=mysqli_connect("localhost","root","", "group");
 
	if (isset($_POST['upload'])){ 
	
		$empid=$_POST['empid'];
		$loan=$_POST['loan'];
		$advance=$_POST['advance'];
		$noofinstallment=$_POST['noofinstallment'];
		$perinstallment=$_POST['perinstallment'];
		$formonth=$_POST['formonth'];
		 
		 
		$sql=("INSERT INTO loanadvance() VALUES ('$empid','$loan','$advance','$noofinstallment','$perinstallment','$formonth')");

		$result = mysqli_query($db,$sql);//store submitted data into database table
	      if (!$result){
            echo "<script>alert(\"Error Occured!\");</script>";
        }else {
            echo "<script>alert(\"Successfully Entered!\");</script>";
         } 
		
		  }
		  
$empquery = "SELECT empid from pumper";
$employeeset = mysqli_query($db,$empquery);
// echo $empquery;

while ($employee = mysqli_fetch_assoc($employeeset) ){
	// echo 'test';
	echo salary($employee['empid']);
	echo '<br>';
}



function salary($emp_id){
	global $db;
	// echo "SELECT workhour FROM fuelsale empid=$emp_id ";
	$working_hours=mysqli_query($db,"SELECT workhour FROM fuelsale WHERE empid=$emp_id ");
	
	$emphours = 0;
	while ($result = mysqli_fetch_assoc($working_hours)){
		$emphours += $result['workhour'];
	}
	// echo (	'Total Work Hours of'.$emp_id.'= '.$emphours);
	if (isset($_POST['submit'])){
	$working_hours=mysqli_query($db,"SELECT workhour FROM fuelsale WHERE empid='$emp_id' ");
	$basic_salary = mysqli_query($db, "SELECT basicsalary FROM pumper WHERE empid = '$emp_id' ");
	$allowence_data= mysqli_query($db, "SELECT allowence FROM pumper WHERE empid = '$emp_id' ");
	// echo "SELECT allowence FROM pumper WHERE empid = '$emp_id' ";
//         $row13 = mysqli_fetch_assoc($photo_q);
//         $photo_price = $row13['pprice'];
	$emphours = 0;
	$advance = 0;
	$loan=0;
	while ($result = mysqli_fetch_assoc($working_hours)){
		$emphours += $result['workhour'];
	}

        // ($otnopay= $nopay | $ot){
	while ($result = mysqli_fetch_assoc($basic_salary)){
		$basicsalary = $result['basicsalary'];
	}

	while ($result = mysqli_fetch_assoc($allowence_data)){
		$allowence = $result['allowence'];
	}
	$advance=mysqli_query($db,"SELECT advance FROM loanadvance WHERE empid='$emp_id' BETWEEN $from AND $to");
	while ($result = mysqli_fetch_assoc($advance)){
		$emphours += $result['advance'];
	}

	$nopay=0;
	$ot=0;

    if ($emphours<160){
        $perhour=$basicsalary/160;
        $nopay =($emphours-160)*$perhour;
    }
    else{
        $perhour=$basicsalary/160;
        $overtime = $perhour*1.5;
        $ot = $overtime*($emphours-160);
    }
	
	$gross = $basicsalary + $allowence  + $nopay + $ot;  
	$epf = $basicsalary*0.08;
	$net= $gross-$epf-$loan-$advance;
    // $data = '<b>EmployeeID: '.$emp_id.'</b><br>Basic salary: '.$basicsalary.'<br>Allowence: '.$allowence.'<br>Nopay:'.$nopay.'<br>OT:'.$ot.'<br>Gross: '.$gross.'<br>EPF: '.$epf.'<br>Advance: '.$advance.'<br>Loan: '.$loan.'<br>NET Salary: '.$net.'<hr>';

    // return $data;
	



   
		echo "<div class='xxxxx'>
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
			     <th>Loan</th>
			     <th>Net Salary</th>
			 </tr>";
			 
			
				 echo"<tr>
		             <td>".$emp_id."</td>
			         <td>".$basicsalary."</td>
			         <td>".$allowence."</td>
			         <td>".$nopay."</td>
			         <td>".$ot."</td>
					 <td>".$gross."</td>
					 <td>".$epf."</td>
					 <td>".$advance."</td>
					 <td>".$loan."</td>
					 <td>".$net."</td>
			 </tr>";
			 
			 echo "</table>
			 </div>";  
			 
			 
			 
        


    // if ($check){}
    // $gross = $basicsalary+ $allownce+ $otnopay;
    // $epf8 = $basicsalary*0.08;
    // // a$adsfdd= 
    // $net = $gross -($efp+ $advb + $loan);

    // echo ($emp_id.'..'.$basic_salary.'..'.$allowence.'..'.$otnopay.'..'.$gross);




	    



    //     $video_q = mysqli_query($db, "SELECT vprice FROM photo WHERE name = '$video' ");
    //     $row12 = mysqli_fetch_assoc($video_q);
    //     $video_price = $row12['vprice'];
}
}

		 
?>



<html>
    <head>
        <?php include '../include/header.php' ?>

        <title>Home</title>
        
        <link rel="stylesheet" type="text/css" href="../CSS/style1.css"/>
        
    </head>
    
    <body class="image-slider">
    
    <div id="box">
        <center><h2> Register Staff </h2>
            <form action="reg.php" method="post">
                <table cellspacing="5">
                    <tr>
                <td><p class=data1>First Name</p></td>
                <td><input name="fname" type="text" class="inputvalues" placeholder="Type your first name" required></td>
                    </tr>
                    <tr>
                <td><p class=data1>Last Name</p></td>
                <td><input name="lname" type="text" class="inputvalues" placeholder="Type your last name" required><br></td>
                    </tr>
                    <tr>
                <td><p class=data1>NIC</p></td>
                <td><input name="nic" type="text" class="inputvalues" placeholder="enter your nic number" required></td>
                    </tr>
                    <tr>
                <td><p class=data1>Address</p></td>
                <td><input name="address" type="text" class="inputvalues" placeholder="enter your address" required></td>
                    </tr>
                    <tr>
                <td><p class=data1>Contact Number</p></td>
                <td><input name="phone" type="text" class="inputvalues" placeholder="enter your contact number" required></td>
                </tr>
                    
                <tr>
                <td><p class=data1>Username</p></td>
                <td><input name="username" type="text" class="inputvalues" placeholder="enter a suitable username" required></td>
                   </tr> 
                   <tr> 
                <td><p class=data1>Password</p></td>
                <td><input type="password" placeholder="Enter Password" name="password" required></td>
                    </tr>
                    <tr>
                <td><p class=data1>Confirm Password</p></td>
                <td><input type="password" placeholder="Enter Password" name="cpassword" required></td>
                    </tr>
                </table>
                    <table align=center>
                    <tr>
                    <td><a href="debdeo.php"><button type="button" class="btn">Submit</button></a></td>
                    
                    
                    <td><a href="creditdeo.php"><button type="button" class="btn">New Record</button></a></td>
                    
                    
                    
                </tr>
                    
                     <tr>
                         <td><a href="creditdeo.php"><button type="button" class="btn">View enterd data</button></a></td>
                         <td><a href="creditdeo.php"><button type="button" class="btn">Edit enterd data</button></a></td>
                         <td><a href="creditdeo.php"><button type="button" class="btn">Delete enterd Data</button></a></td>
                    </tr>
                </table>

                
               
            </form>
            
            </center>
        
        
        
        <?php
			if(isset($_POST['register']))
			{
				$fname=$_POST['fname'];
                $lname=$_POST['lname'];
                $nic=$_POST['nic'];
                $address=$_POST['address'];
				$phone=$_POST['phone'];
                $username=$_POST['username'];
				$password=$_POST['password'];
				$cpassword=$_POST['cpassword'];
				
				if($password==$cpassword)
				{
				$query = "SELECT * from owner WHERE customer_name='$cname'";
					//echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
					{
						if(mysqli_num_rows($query_run)>0)
						{
							echo '<script type="text/javascript">alert("This Username Already exists.. Please try another username!")</script>';
						}
						else
						{
                            
							 
							$query = "INSERT INTO owner(NIC, FirstName,LastName,TelephoneNo,Address,UserName,Password) VALUES('$nic','$fname','$lname','$address',$phone,'$username','$password')";
							$query_run = mysqli_query($con,$query);
							if($query_run)
							{
								$_SESSION['fname'] = $fname;
                                $_SESSION['lname'] = $lname;
                                $_SESSION['nic'] = $nic;
                                $_SESSION['address'] = $address;
								$_SESSION['phone'] = $phone;
                                $_SESSION['username'] = $username;
								$_SESSION['password'] = $password;
								header( "Location:reg.php");
							}
							else
							{
								echo '<p class="bg-danger msg-block">Registration Unsuccessful due to server error. Please try again later</p>';
							}
						}
					}
					else
					{
						echo '<script type="text/javascript">alert("DB error")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Password and Confirm Password do not match")</script>';
				}
				
			}

		?>
        
        
        
        
        

        </div>
                 <?php include '../include/footer.php' ?>
  
    </body>
        </html>
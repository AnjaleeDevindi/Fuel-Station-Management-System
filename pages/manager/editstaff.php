<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Staff_Register</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../../vendor/morrisjs/morris.css" rel="stylesheet">

     <link href="../style.css" rel="stylesheet">
     <link href="footer.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <?php include 'include/headermanager.php'?>

</head>

<body background="back-ground.jpg.jpg">

    <div id="wrapper">

       
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Manager</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Staff Details
                        </div>
                        <!-- /.panel-heading -->
                        <div class=panelbody>
  <form width=70% action="regstaffman-insert.php" method="post">
    
     <label for="ftype">NIC</label><br>
    <input type="text" minlength="10" maxlength="10" id="nic" name="NIC" placeholder="Enter NIC Number.." required><br>

    <label for="ftype">Employee ID</label><br>
    <input type="text" minlength="6" maxlength="10" id="nic" name="NIC" placeholder="Enter NIC Number.." required><br>

    <label for="fid">First Name</label><br>
    <input type="text" id="fname" name="firstname" placeholder="Enter First name.." required><br>

     <label for="fid">Last Name</label><br>
    <input type="text" id="lname" name="lastname" placeholder="Enter Last name.." required><br>

   <label for="uprice">Contact Number</label><br>
    <input type="text" minlength="10" maxlength="10" id="cno" name="contactnumber" placeholder="Enter Contact Number.."><br>
      

     <label for="fid">Address</label><br>
    <input type="text" id="address" name="address" placeholder="Enter Address.." required><br>

     <label for="uprice">Date Of Birth</label><br>
    <input type="date" id="dob" name="dob" placeholder="Enter Birth Date.." required><br>
    
    <label for="uprice">Email</label><br>
    <input type="email" size="83" id="email" name="email" placeholder="Enter Email.."><br><br>

    <label for="staff">Register As:</label><br>

      <select name="type">
        <option value="Data Entry Operator">Data Entry Operator</option>
        <option value="Manager">Manager</option>
        <option value="Cashier">Cashier</option>
        <option value="Owner">Owner</option>
      </select><br><br>

     <label for="uprice">Password</label><br>
    <input type="password" size="83" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Enter password.." required><br><br>
      
    <label for="uprice">Confirm Password</label><br>
    <input type="password" size="83" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Enter password.." required><br><br>  
  <center>

    <input type="submit" value="Submit"></center>
  </form>

 

    <div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
                
<script>
    // pw Character validation
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}

// confirm pw validation
function validateform() {
        var x= document.getElementById('psw').value;
        var y = document.getElementById('psw1').value;
        if(x != y){
            alert("Paswords does not match");
            return false;
        }else{
            return true;
        }

    }
</script>



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
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Flot Charts JavaScript -->
    <script src="../../vendor/flot/excanvas.min.js"></script>
    <script src="../../vendor/flot/jquery.flot.js"></script>
    <script src="../../vendor/flot/jquery.flot.pie.js"></script>
    <script src="../../vendor/flot/jquery.flot.resize.js"></script>
    <script src="../../vendor/flot/jquery.flot.time.js"></script>
    <script src="../../vendor/flot-tooltip/jquery.flot.tooltip.min.js"></script>
    <script src="../../data/flot-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../../dist/js/sb-admin-2.js"></script>

    <?php include 'footer.php' ?>

</body>

</html>
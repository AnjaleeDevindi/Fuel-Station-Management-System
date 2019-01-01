!DOCTYPE html>
<html lang="en">

<head>

    
    <title>Advance or Loans</title>

   
    <?php include 'include/headerdeo.php'?>


</head>

<body background="back-ground.jpg.jpg">

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
  <form width=70% action="/action_page.php">
    <label for="fid">Pumper ID</label><br>
    <input type="text" id="fname" name="firstname" placeholder="Enter Pumper ID.."><br>

     <label for="fid">Loan or Advance</label><br>
    <select name="brand_name">
                         <option value="loan">Loan</option>
                         <option value="advane">Advance</option>
                    </select><br>

    <label for="ftype">Number of Instllments</label><br>
    <input type="text" id="lname" name="lastname" placeholder="Enter number of monthly installments"><br>

     <label for="fid">installment per month</label><br>
    <input type="text" id="fname" name="firstname" placeholder="Enter installment value"><br>


    <label for="uprice">start from.. </label><br>
    <input type="time" id="lname" name="lastname" placeholder="reduse from salary from this month"><br>


  <center>
      
      
      
    <input type="submit" value="Submit"></center>
  </form>

    <?php include 'footer.php' ?>

</body>

</html>

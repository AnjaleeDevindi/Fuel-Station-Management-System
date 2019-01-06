<?php
if(empty($_SESSION))
{
    echo "<script>window.alert('Please login to continue !');
    			window.location='../pages/login.php'</script>";
}
?>
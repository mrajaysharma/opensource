<?php
/*
Author: Javed Ur Rehman
Website: http://www.allphptricks.com/
*/
 
require('db.php');
include("auth.php");

$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$trn_date = date("Y-m-d H:i:s");
$name =$_REQUEST['name'];
$age = $_REQUEST['age'];
$submittedby = $_SESSION["username"];
$ins_query="insert into new_record (`trn_date`,`name`,`age`,`submittedby`) values ('$trn_date','$name','$age','$submittedby')";
mysqli_query($con,$ins_query) or die(mysql_error());
$status = "New Record Inserted Successfully.</br></br><a href='view.php'>View Inserted Record</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert New Record</title>
<style>
h2 {
    color: red;
    font-family: verdana;
    font-size: 300%;
      text-align: center;
}

p {
    color: white;

    font-family: verdana;
    font-size: 100%;
      text-align: left
      ;
}
</style>
<link rel="stylesheet" href="css/style.css" />
</head>
<body background="33.jpg">
<h2>Ramgarhia Public School, Shahkot</h2>
<div class="form">
<p style="color: red"><a style="color: white" href="dashboard.php">Dashboard</a> | <a style="color: white" href="view.php">View Records</a> | <a style="color: white" href="logout.php">Logout</a></p>

<div>
<h1>Insert New Details</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="name" placeholder="Enter Name" required /></p>
<p><input type="text" name="age" placeholder="Enter Age" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>


</div>
</div>
</body>
</html>

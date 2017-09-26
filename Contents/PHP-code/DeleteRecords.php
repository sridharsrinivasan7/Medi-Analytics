<?php

if(isset($_POST['btn']))
{
  $conn = new mysqli("localhost", "root", "Tiger","ITMD523");
  if($conn->connect_error)
  {
   echo "Connection error";
  }
  $val = $_POST['id'];
  $Query= "DELETE FROM `patientdetails` WHERE patientid = '$val'";
  $res = $conn->query($Query);
  
  if($res)
  {
    //echo "Recored".$_POST['id']. "deleted success";
  }
  else{ echo "Record".$val." not found"; }
}
?>


<!DOCTYPE html>
<html>
<title> RECORDS DELETION </title>
<link rel="stylesheet" href="style.css">
<body background="background.jpg">
    <div class="imgcontainer">
       	<img src="logo.png" alt="IITC_LOGO" class="logo">
			<h2> MEDI-ANALYTICS </h2>
		</div>
		
			
<div class="form">
<form name="form1" form action = "DeleteRecords.php" method = "post">
<div class="container">
<label><h3 style="width: 50%; margin: 0 auto;"> DELETE RECORD </h3></label><br>
<label> <b> USER-ID: </b></label><br>
<input type = "text" name="id" placeholder="Enter UserID" required><br><br>
<input type = "submit" name =btn value = "Delete Record">
</div>
<form>
</div>
</body>
</html>

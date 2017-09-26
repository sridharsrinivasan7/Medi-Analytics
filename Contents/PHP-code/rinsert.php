<html>
<head>
<title> Data Entered </title>
<body>
<?php
 session_start(); //To Track the Session for the Flag variable 
 $check=$_SESSION['flag'];
 $conn = new mysqli("localhost", "root", "Tiger","ITMD523");
 //$conn =$_SESSION['connection']; 
 //Storing the form data into appropriate variables

 $PID = $_POST['patientid'];
 $name = $_POST['pname'];
 $age = $_POST['age'];
 $gender = $_POST['gen'];
 $pob = $_POST['POB'];
 $healthid = $_POST['healthID'];
 $phone = $_POST['phone']; 

 echo "<br>";
 if($check=="true")
{
 
 $q1 = "INSERT INTO `patientdetails` VALUES ('$PID','$name','$age','$pob','$gender','$healthid','$phone')";
 if(mysqli_query($conn, $q1))
 {
  echo "data inserted success";
 }
 else { echo "Error".$conn->error; }
 session_destroy();
}
else
include("failover.php")
//echo "No Trespassing  ";
?>
</body>
</head>
</html>

<html>
<title> ADMIN </title>
<body background="background.jpg">
<form action = "DeleteRecords.php" method ="post">
<div style = "position:fixed; left:1800px; top:20px;">
<input type = "submit" name = "btn" value = "ClicktoDeleteRecord">
</div> 
</form>
<form action = "Page1.html" method ="post">
<input type ="submit"name= "submit" value= "Logout" />
</form>
<center>
<?php
 session_start(); //To Track the Session for the Flag variable 
 $check=$_SESSION['flag'];
$conn = new mysqli("localhost", "root", "Tiger","ITMD523");

if($conn->connect_error)
{
 echo "Connection error";
}

if(isset($_POST['update']))
{	
  $UpdateQ = "UPDATE `patientdetails` SET `patientid`='$_POST[pid]',`pname`='$_POST[name]',`age`=$_POST[aage],`POB`='$_POST[place]',`gender`='$_POST[gen]',`healthID`='$_POST[hid]',`phone`='$_POST[num]' WHERE `patientid`= '$_POST[hpid]'";
$res1 = $conn->query($UpdateQ);
echo "<script type='text/javascript'>";
echo "alert('update success')";
echo "</script>";
};


$sql = "SELECT `patientid`, `pname`, `age`, `POB`, `gender`, `healthID`, `phone` FROM `patientdetails`";
$res = $conn->query($sql);
echo "<div>";
echo "<table width=4>";
echo "<tr>";
echo "<td> Patient ID </td>";
echo "<td> Name </td>";
echo "<td> Age </td>";
echo "<td> Place of Birth </td>";
echo "<td> Gender</td>";
echo "<td> HealthID </td>";
echo "<td> Phone </td>";
echo "</tr>";



// while($record = mysql_fetch_array($res))
while($row = $res->fetch_assoc())
{

   echo "<form action='admin.php' style = 'width: 50px' method=post>";
   echo "<tr>";
   echo "<td>". "<input type = text name = pid  size = 2 value= " .$row['patientid'].  " </td>"; 
   echo "<td>". "<input type = text name = name size = 5 value= " .$row['pname']. " </td>"; 
   echo "<td>". "<input type = text name = aage size = 1 value= " .$row['age']. " </td>"; 
   echo "<td>". "<input type = text name = place size =5 value= " .$row['POB']. " </td>"; 
   echo "<td>". "<input type = text name = gen size = 2 value= " .$row['gender']. " </td>"; 
   echo "<td>". "<input type = text name = hid size = 1 value= " .$row['healthID']. " </td>"; 
   echo "<td>". "<input type = text name = num size = 5 value= " .$row['phone']. " </td>"; 
   echo "<td>". "<input type = hidden name = hpid value= " .$row['patientid']. " </td>"; 
   echo "<td>". "<input type = submit name = update value= update" . " </td>"; 
   
   echo "</form>";
 
}
echo "</table>";
echo "</div>";
mysqli_close($conn);
?>
</body>
</html>


<html>
<body>

<?php
session_start();
$userid = $_POST['name'];
$password = $_POST['pwd'];
$radio = $_POST['usr'];
$_SESSION['flag']="false";

$userid = stripcslashes($userid);
$password = stripcslashes($password);

$conn = new mysqli("localhost", "root", "Tiger","ITMD523");
if($conn->connect_error)
{
 echo "Connection error";
}
$_SESSION['connection'] =$conn;
$userid =   mysqli_real_escape_string($conn, $userid);
$password = mysqli_real_escape_string($conn, $password);
//mysql_select_db("ITMD523");


 if(isset($radio))
 {
  if($radio=="rep")
  {
   $sql = "select * from `USER-LOGIN` where USERID = '$userid' and PASSWORD = '$password' and type = '$radio' ";
   $res = $conn->query($sql);  //execute the above query

   $count = mysqli_num_rows($res);
   
   if($count==1)
   {
    $_SESSION['flag']="true";  
  //$flag="true";
    include("rep.php");
   }
   else
   {
    echo "INVALID USERNAME/PASSWORD";
   }
  }
  elseif($radio=="admin")
  {
   $sql = "select * from `USER-LOGIN` where USERID = '$userid' and PASSWORD = '$password' and type = '$radio' ";
   $res = $conn->query($sql);

   $count = mysqli_num_rows($res);
   if($count==1)
   {
    $flag="true";
    include("admin.php");
   }
   else
   {
    echo "INVALID USERNAME/PASSWORD";
   }
  }
  elseif($radio=="mgt")
  {
   $sql = "select * from `USER-LOGIN` where USERID = '$userid' and PASSWORD = '$password' and type = '$radio' ";
   $res = $conn->query($sql);

   $count = mysqli_num_rows($res);
   if($count==1)
   {
    $flag="true";
    include("manager.php");
   }
   else
   {
    echo "INVALID USERNAME/PASSWORD";
   }
  }
 }
 else
 {
   echo "select a radio button user!!!"; 
 }

//$res= mysqli_query("select * from `USER-LOGIN` where USERID = '$userid' and PASSWORD = '$password'") or die("failed to connect to the db".mysql_error());
//$row=mysql_fetch_array($res);
//$count = mysql_num_rows($res);

//if($count==1)
//{ 
// echo "Success login";
//}
//else{
//echo "Failed to connect to DB";
//}

?>
</body>
</html>

<html>
<body>

<?php
$radio=$_POST['usr'];
echo $radio;
echo "<br></br>";

if(isset($radio))
 {
   if($radio=="admin")
   {
     echo "Admin";
   }
   elseif($radio=="rep")
   {
     echo "REP";
   }
  elseif($radio=="mgt")
  {
    echo "MGT";
  }
}
else
{
  //echo "<script>";
  echo "alert(User not selected)";
  //echo "</script>";
}
?>
<script>
//alert("me");
</script>
</body>
</html> 

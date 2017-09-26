<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> <?php echo "WELCOME ". $_POST['name'] ?></title>
<link rel="stylesheet" href="style.css">

<script type="text/javascript">
function logoff()
{
  document.f1.action="Page1.html";
  document.f1.submit();
  return true;
}
function validate()
{
  if(document.f1.pname.value.trim()=="" || document.f1.patientid.value.trim()=="" || document.f1.age.value.trim()=="" || document.f1.healthID.value.trim()=="" || document.f1.POB.value.trim()=="" || document.f1.phone.value.trim()=="" ||document.f1.gen.value=="")
 {
    //alert("Missing Fields");
    return false;
 }

 if(!/^[a-zA-Z]*$/g.test(document.f1.pname.value)) 
 {
     alert("Only alphabets in name");
     document.f1.pname.focus();
     return false;
 }

 if(!/^[a-zA-Z]*$/g.test(document.f1.POB.value)) 
 {
     alert("Invalid country Name");
     document.f1.POB.focus();
     return false;
 }
 if(!/^[0-9]+$/.test(document.f1.phone.value))
 {
    alert("Only numbers");
    document.f1.phone.focus();
    return false;
 }
 return true;
 }

</script>

</head>

<body background="background.jpg">
	<div class="imgcontainer">
    	<img src="logo.png" alt="IITC_LOGO" class="logo">
		<h2> MEDI-ANALYTICS </h2>
	</div>
   
   <div class="form">

<h4> Need to write a search Tab to find the exisiting patient details:</h4>
<form name="f1" action="rinsert.php" method="post" onsubmit="return( validate());">
<br><br>
<div class="container">
	<label for="patientid"><b>Patient ID:</b></label><br>

	<input type="text" name="patientid" maxlength = 5 id="patientid"><br>

	<label for="pname"><b>Name:</b></label><br>

	<input type="text" name="pname" maxlength = 10 id="pname"><br>

	<label for="age"><b>Age:</b></label><br>

	<input type="number" min=0 name="age" id="age"><br>

	<label for="gender"><b>Gender:</b></label><br>
	<select name="gen">
	<option>  </option>
		<option value="male">MALE</option>
		<option value="female">FEMALE</option>
	</select><br>

	<label for="POB"><b>Place of Birth:</b></label><br>

	<input type="text" name="POB"  maxlength =10 id="POB"><br>

	<label for="healthID"><b>Health ID:</b></label><br>

	<input type="number" min = 1 max = 7 name="healthID" id="healthID"><br>

	<label for="phone"><b>Phone:</b></label><br>

	<input type="text" name="phone" maxlength =10 id="phone"><br>

	<input type="submit" id="btn" value="Submit" onclick="validate()"/>
	<input type="submit" id="btn" name = "logout" value="Logout" onclick="logoff()"/>

	</div>
</form>
</div>
</body>
</html>

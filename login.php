<html>
<head>
	<title>Fix-it</title>
	
	<link rel="stylesheet" type="text/css" href="css/login.css" />
</head>

<body>
	
	<?php
	include 'header.php';
	?>
	<div class="form">
		<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" >
<tr>
<form name="form1" method="POST" action="checklogin.php" >
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#dcd5bc">
<tr>

<div class="form2">
<div class="mem"><td colspan="3"><strong>Member Login </strong></td></div>
</tr>
<tr>

<td width="78">Username</td>
<td width="6">:</td>
<td width="294">

<input  type="text"  name="myusername" id="myusername" required></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input name="mypassword" type="password" id="mypassword" required></td>
</tr>
<tr>

<td>&nbsp;</td>
<td>&nbsp;</td>   
<td><button class="button" name="login" id="search"> LOGIN </button></td>
</tr>
</table>
</div>
</td>
</form>
</tr>
</table>


		
	</div>
	<div class="sign">
		<h4><strong>New User?Click here<a href="signup.php">  Sign Up</a></strong></h4>
	</div>
	<br>&nbsp;
	<br>
	<br>
 <?php

	include 'footer.php';
	?>

	<?php
	if (isset($_GET['logout'])) {
	echo "Logout Successfully";
	} 
	?>


   
    
</body>
</html>

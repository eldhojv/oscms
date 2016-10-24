<?php
include 'headerlogoutuser.php';
session_start();

if(!isset($_SESSION['uname']))
{
	header("location:login.php");
}
else
	echo "<div class='msg'>Welcome  ". $_SESSION["uname"]."</div></br>";


	
	

?>
<html>
<head>
	<title>Fix-it</title>
    <link rel="stylesheet" type="text/css" href="css/usergateway.css" />
</head>
<body>

	</div>
  <div class="links">
  <div class="register">
    <a href="adddevice.php"> REGISTER DEVICE </a>
    </div>
     <div class="register">
    <a href="registereddevices.php"> REGISTERED DEVICES </a>
    </div>

    <div class="buy">
   <a href="bookrepair.php">BOOK REPAIR</a>
    </div>
    
    <div class="sell">
    <a href="repairhistory.php"><strong> REPAIR HISTORY </strong></a> 
    </div>
   <div class="buy">
   <a href="validaterepair.php">VALIDATE BOOK REPAIR</a>
    </div>
    <div class="addbk">
    <a href="extended.php"><strong> EXTENDED WARRANTY  </strong></a> 
    </div>
    
    <div class="lost">
    <a href="lostdb.php"><strong> LOST DEVICE </strong></a> 
    </div>

    <div class="change">
    <a href="changepwd.php"><strong> CHANGE PASSWORD  </strong></a>
    </div>

  </div>
  </div>
</body>
</html>

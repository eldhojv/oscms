<html>
<head>
  <title>Fix-it</title>
   <link rel="stylesheet" type="text/css" href="css/tableone.css" />
 <link rel="stylesheet" type="text/css" href="css/adddevicegateway.css" />
  <link rel="stylesheet" type="text/css" href="css/adddevice.css" />



  </head>

<body>
<?php
include 'headerlogoutuser.php';
?>

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

<?php
session_start();
$userid=$_SESSION['uid'];


$con=mysql_connect("localhost","root","") or die('Could not connect');
mysql_select_db("servicecenter") or die("Cannot select db");


$sql1="SELECT * from devicelist WHERE userid='$userid'"; 
     


$result1 = mysql_query( $sql1, $con);
?>
<div class="table">
<?php
echo "<table border='1'>
<tr>
<th>Device ID</th>
<th>Device Brand</th>
<th>Device Product</th>
<th>Device OS</th>
<th>Device IMEI</th>
<th>Device Warranty</th>
<th>Lost Status</th>

</tr>";

if (mysql_num_rows($result1) > 0)
{
while($row= mysql_fetch_assoc($result1))
	
   {    $devid=$row['devid'];
        echo "<tr>";
        echo "<td>" . $row['devid'] . "</td>";
        echo "<td>" . $row['devbrand'] . "</td>";
        echo "<td>" . $row['devproduct'] . "</td>";
        echo "<td>" . $row['devos'] . "</td>";
        echo "<td>" . $row['devimei'] . "</td>";
        echo "<td>" . $row['devwarranty'] . "</td>";
         if($row['devlost']==0)
        echo "<td>" . "Device not lost" . "</td>";
        elseif($row['devlost']==(1))
        echo "<td>" . "Devicelost" . "</td>";

       
              
        echo "</tr>";

    }
}?>

</div>
<?
   mysql_close($con);
  


?>
<div class="temp">
<?php
 //include "footer.php";
 ?>
</div>
</body>
</html>


  
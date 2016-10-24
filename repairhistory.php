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
$db=mysql_select_db("servicecenter",$con);


$sql1="SELECT * from bookorder WHERE userid='$userid'"; 
     


$result1 = mysql_query( $sql1, $con);
?>
<div class="table">
<?php
echo "<table border='1'>
<tr>
<th>Device ID</th>
<th>Problem Type</th>
<th>Problem</th>
<th>Status</th>
<th>Message</th>
<th>Amount</th>

</tr>";

if (mysql_num_rows($result1) > 0)
{
while($row= mysql_fetch_assoc($result1))
	
   {    $devid=$row['devid'];
        echo "<tr>";
        echo "<td>" . $row['devid'] . "</td>";
        echo "<td>" . $row['problemtype'] . "</td>";
        echo "<td>" . $row['problem'] . "</td>";
        if($row['value']==0)
        echo "<td>" . "Pending" . "</td>";
        elseif($row['value']==(-1))
        echo "<td>" . "Declined" . "</td>";
        elseif($row['value']==1)
        echo "<td>" . "Admin Approved" . "</td>";
        elseif($row['value']==2)
        echo "<td>" . "Pickup Scheduled" . "</td>";
        elseif($row['value']==3)
        echo "<td>" . "Picked uo" . "</td>";
        elseif($row['value']==4)
        echo "<td>" . "Troubleshooting" . "</td>";
        elseif($row['value']==5)
        echo "<td>" . "Customer Approved" . "</td>";
         elseif($row['value']==6)
        echo "<td>" . "Repairing" . "</td>";
        elseif($row['value']==7)
        echo "<td>" . "Out for delivery" . "</td>";
        elseif($row['value']==8)
        echo "<td>" . "Delivered" . "</td>";
        elseif($row['value']==11)
        echo "<td>" . "Rejected" . "</td>";
        elseif($row['value']==10)
        echo "<td>" . "Waitlist" . "</td>";
        else
        echo "<td>" . "Database error" . "</td>";
        echo "<td>" . $row['message'] . "</td>";
        echo "<td>" . $row['amount'] . "</td>";

      
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


  
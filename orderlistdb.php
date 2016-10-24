<html>
<head>
  <title>Fix-it</title>
  
  </head>

<body>
<?php
include 'headerlogoutadmin.php';
?>



<?php

global $value,$devid;
$con=mysql_connect("localhost","root","") or die('Could not connect');
mysql_select_db("servicecenter") or die("Cannot select db");


$sql1="SELECT * FROM bookorder "; 



$result1 = mysql_query($sql1, $con);
//$result2 = mysql_query( $sql2, $con);

?>
<div class="one">
<table border='1' align="center">
<tr>
<th>Device ID</th>
<th>User ID</th>
<th>Product</th>
<th>Problem</th>
<th>Current Status</th>

</tr>

<?php

if (mysql_num_rows($result1) > 0)
{
 while($row = mysql_fetch_assoc($result1))
    {   $devid=$row['devid'];
        echo "<tr>";
        echo "<td>" . $row['devid'] . "</td>";
        echo "<td>" . $row['userid'] . "</td>";
        echo "<td>" . $row['problemtype'] . "</td>";
        echo "<td>" . $row['problem'] . "</td>";
        if( $row['value']==0)
        echo "<td>Pending</td>";
       if( $row['value']==1)
        echo "<td>Approved</td>";
       if( $row['value']==-1)
        echo "<td>Declined</td>";
       if( $row['value']==2)
        echo "<td>Pickup Scheduled</td>";
       if( $row['value']==3)
        echo "<td>Pickup</td>";
       if( $row['value']==4)
        echo "<td>Troubleshooting</td>";
        if( $row['value']==5)
        echo "<td>Customer approved</td>";
         if( $row['value']==6)
        echo "<td>Repairing</td>";
       if( $row['value']==7)
        echo "<td>Out of Delivery</td>";
       if( $row['value']==8)
        echo "<td>Delivered</td>";
       if( $row['value']==10)
        echo "<td>Waitlist</td>";
        if( $row['value']==11)
        echo "<td>Customer Declined</td>";


        echo "<td>"  ?> <form method=POST> <button class="button" id="approve"  name="approve<?php echo $devid;?>" >Approve </button></form> <?php "</td>";
        echo "<td>"  ?> <form method=POST> <button class="button" id="approve"  name="decline<?php echo $devid;?>" >Decline </button></form> <?php "</td>";
        echo "<td>"  ?> <form method=POST> <button class="button" id="approve"  name="waitlist<?php echo $devid;?>" >Waitlist </button></form> <?php "</td>";

        if(isset($_POST[ 'approve'.$devid]))
          {

           $sql = "UPDATE bookorder SET value='1' WHERE devid='$devid'";
           mysql_query($sql,$con);
          
        
          }
          if(isset($_POST[ 'decline'.$devid]))
          {

           $sql = "UPDATE bookorder SET value='-1' WHERE devid='$devid'";
            mysql_query($sql,$con);
           
            
          }
           if(isset($_POST[ 'waitlist'.$devid]))
          {

           $sql = "UPDATE bookorder SET value='10' WHERE devid='$devid'";
           mysql_query($sql,$con);
           
           
          }
    }       

 }

   mysql_close($con);


?>
</table>
</div>

 

  </body>
  </html>
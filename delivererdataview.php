<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/worker.css">
</head>
<body>


<?php
include 'headerlogoutdeliverer.php';
      $con=mysql_connect("localhost","root","") or die(mysql_error());
            mysql_select_db("servicecenter") or die(mysql_error());
            $sql="SELECT * from bookorder where value=1";

$sql="SELECT * from bookorder inner join customer on bookorder.userid = customer.userid where bookorder.value=2 or bookorder.value=7 or bookorder.value=11"; 

            $result = mysql_query( $sql, $con);
            $count=mysql_num_rows($result);
       if ($count==0)
       echo"no orders";
       else
       {

  ?>

   <div class="one">
   <table border='1' align="center">
   <tr>
   <th>User ID</th>
      <th>Device ID</th>
   <th>Customer</th>
   <th>Customer Address 1</th>
   <th>Customer Address 2</th>
   <th>Customer Address 3</th>
   <th>Customer Phone</th>
   <th>Customer Location</th>
   <th>Pickup/Delivery</th>
   <th>Amount</th>

   </tr>

<?php  
while($row = mysql_fetch_assoc($result)) {
    echo  '<tr><td>';
    echo $row['userid'] ;
    echo '</td><td>';
    echo $row['devid'] ;
    echo '</td><td>';
    echo $row['custname'];
    echo '</td><td>';
    echo $row['custadd1'];
    echo '</td><td>';
    echo $row['custadd2'] ;
	  echo '</td> <td>';    
	  echo $row['custadd3'] ;
    echo '</td> <td>';    
    echo $row['custphno'] ;
    echo '</td> <td>';    
    echo $row['custlocation'] ;
    echo '</td> <td>';
    if($row['value']==7)
      {echo "Out for Delivery";
      echo '</td> <td>';
    }
    if($row['value']==2)
     { echo "Pickup scheduled";
      echo '</td> <td>';
    }

    if($row['value']==6)
      {echo "Declined";
      echo '</td> <td>';
      }
      if($row['value']==11)
      {echo "Declined-Delivery";
      echo '</td> <td>'; 
    }
    if($row['value']!=11)
    {
    echo $row['amount'] ;
    echo '</td> <td>';
    }
    echo "<tr>";

	  //echo '</td><td><a href="canceltxn.php?id='.$row['device_id'].'" ><input 
	 //echo type="submit" value="VIEW DETAILS" /></a></td></tr>';
 
  
 
}
}

?>
</table>
<?php
mysql_close($con);





?>
</body>
</html>
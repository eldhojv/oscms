<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/worker.css">
</head>
<body>


<?php
include 'header.php';
      $con=mysql_connect("localhost","root","") or die(mysql_error());
            mysql_select_db("servicecenter") or die(mysql_error());
         $sql="SELECT * from bookorder where value=1";
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
   <th>Device ID</th>
   <th>User ID</th>
   <th>Product</th>
   <th>Problem</th>
   </tr>

<?php  
while($row = mysql_fetch_assoc($result)) {
    echo  '<tr><td>';
    echo $row['device_id'] ;
    echo '</td><td>';
    echo $row['device_name'] ;
    echo '</td><td>';
    echo $row['status_no'];
    echo '</td><td>';
    echo $row['IMEI'] ;
	echo '</td> <td>';    
	echo $row['customer_id'] ;
  echo '</td> <td>';    
  echo $row['service_status'] ;
  echo '</td> <td>';    
  echo $row['service_no'] ;
	echo '</td><td><a href="canceltxn.php?id='.$row['device_id'].'" ><input 
	type="submit" value="VIEW DETAILS" /></a></td></tr>';
 
  
 
}
}

?>
</table>
<?php
mysql_close($con);





?>
</body>
</html>
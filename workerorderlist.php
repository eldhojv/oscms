<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/worker.css">
</head>
<body>


<?php
include 'headerlogoutworker.php';
      $con=mysql_connect("localhost","root","") or die(mysql_error());
            mysql_select_db("servicecenter") or die(mysql_error());
            $sql="SELECT * from bookorder where value=1";

$sql="SELECT * from bookorder inner join customer on bookorder.userid = customer.userid where bookorder.value>=3 and bookorder.value<7 "; 

            $result = mysql_query( $sql, $con);
            $count=mysql_num_rows($result);
       if ($count==0)
       echo"No Orders";
       else
       {

  ?>

   <div class="one">
   <table border='1' align="center">
   <tr>
   <th>User ID</th>
   <th>Device ID</th>
   <th>Problem Type</th>
   <th>Problem</th>
   <th>Problem Description</th>
   <th>Customer Phone</th>
   <th>Customer Email</th>
   <th>Status</th>

   </tr>

<?php  

while($row = mysql_fetch_assoc($result)) 
{
   if(($row['value']>=3)&&($row['value']<7))
   {
    echo  '<tr><td>';
    echo $row['userid'] ;
    echo '</td><td>';
    echo $row['devid'];
    echo '</td><td>';
    echo $row['problemtype'];
    echo '</td><td>';
    echo $row['problem'] ;
	  echo '</td> <td>';    
	  echo $row['problemdes'] ;
    echo '</td> <td>';    
    echo $row['custphno'] ;
    echo '</td> <td>';    
    echo $row['custemail'] ;
    if($row['value']==3)
      echo "Pickedup";
      echo '</td> <td>';
    if($row['value']==4)
      echo "Troubleshooting";
      echo '</td> <td>';
    if($row['value']==5)
      echo "Customer Approved";
      echo '</td> <td>';
      

} 
}
}
?>
</table>
<?php
mysql_close($con);





?>
</body>
</html>
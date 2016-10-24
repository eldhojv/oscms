
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/signup.css">
</head>
<body>
<?php
include'header.php';
$connection = mysql_connect("localhost", "root", "") or die('Could not connect');
mysql_select_db("servicecenter")or die("cannot select DB");

global $IMEI;
$flag='0';
$flagtwo='0';
if(isset($_POST['submit']))
{	
	$IMEI=$_POST['imei'];
  if (!preg_match("/^[0-9 ]*$/",$IMEI))
 {
   $imeErr = "Only numbers allowed"; 
   $flagtwo='1';
    }
}

if($flagtwo)
{
  echo $imeErr;
  header("Refresh:2,url=guest.php");
}


 $sql2 = "SELECT * FROM devicelist WHERE devimei='$IMEI' ";
//$result = $connection->query($sql2);

$result = mysql_query( $sql2, $connection);
$count=mysql_num_rows($result);
$row = mysql_fetch_assoc($result);
		
             if($count==1&&!$flagtwo)
                {
                  $userid=$row['userid'];
                  if($row['devlost']==1)
                   {
                    $flag='1';
                    echo nl2br("Device is Lost\n");
                   }
                   else
                    echo "Device not lost";  
                }
                
                else 
                {
                  if(!$flagtwo)
                  echo"IMEI not registered with us";
                }



                
                if($flag=='1')
                {
                  $sql1 = "SELECT * FROM customer WHERE userid='$userid' ";
                  $result = mysql_query( $sql1, $connection);
                  $count=mysql_num_rows($result);
                  $row = mysql_fetch_assoc($result);
                  ?>
                  <div class="one">
                  <?php
                  echo nl2br("Lost phone Customer details\n");
                  echo  '<tr><td>';
                  echo nl2br("Customer Name: ".$row['custname']."\n") ;
                  echo '</td><td>';
                  echo nl2br("Customer Phone No.: ".$row['custphno']."\n") ;
                  echo '</td><td>';
                  echo nl2br("Customer Email: ".$row['custemail']."\n");
                  echo '</td><td>';
                  ?>
                  </div>
                  <?php
                }
 
             
          
/*if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "IMEI: ". $row["IMEI"]."<br>";
    } 
    if (mysql_query($sql1,$connection)&&mysql_query($sql2,$connection))
  {
  die('Your data has been successfully added and IMEI number matched');
  }
  
  else{Error: ' . mysql_error()';}
 }*/
  mysql_close($connection);
    
 ?>
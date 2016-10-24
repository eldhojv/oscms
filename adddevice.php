<html>
<head>
  <title>Fix-it</title>
  
  <link rel="stylesheet" type="text/css" href="css/adddevicegateway.css" />
  <link rel="stylesheet" type="text/css" href="css/adddevice.css" />


</head>


<body>
<?php

include 'headerlogoutuser.php';
 session_start();
 
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

  </div>
  </div>
</body>
<?php

global $brand,$product,$model,$os,$imei;
$imeErr="";
$flag='0';
if(isset($_POST['submit']))
{
   $brand=$_POST['brand'];
   $product=$_POST['product'];
   $os=$_POST['os'];
   $imei = test_input($_POST["imei"]);
if (!preg_match("/^[0-9 ]*$/",$imei)) {
   $imeErr = "Only numbers allowed"; 
   $flag='1';
    }
   $userid=$_SESSION['uid'];
   $devid=rand(0,99999);
  
  $connection = mysql_connect("localhost", "root", "") or die('Could not connect');
               mysql_select_db("servicecenter")or die("cannot select DB");
  
   $sql1 = "INSERT INTO devicelist (userid,devid,devbrand,devproduct,devos,devimei) VALUES ('$userid','$devid','$brand','$product','$os','$imei')";
   if(!$flag)
  {
   if (mysql_query($sql1,$connection))
    {
    echo "Your data has been successfully added";
    }
    else 
      echo "Error adding information";
   
    mysql_close($connection);
  }
   else echo "Data not added"; 
}
function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }

?>
  <div class="form">
    <form action="adddevice.php" method="POST">
      Brand       <input type="text" name="brand" size="50" required><br><br>
      Product   <input type="text" name="product" size="50" required><br><br>
      OS  <input type="text" name="os" size="50" required><br><br>
      IMEI  <input type="text" name="imei" size="50" required>
      <span class = "error">* <?php echo $imeErr;?></span>
      <br><br>      
      <button class="button" id="submit" name="submit">REGISTER </button>
      </form> 
  </div>

<?php
include 'footer.php';
?>
</body>
</html>
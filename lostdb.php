<html>
<head>
  
  <link rel="stylesheet" type="text/css" href="css/signup.css" />
 <link rel="stylesheet" type="text/css" href="css/adddevicegateway.css" />
  <link rel="stylesheet" type="text/css" href="css/adddevice.css" />

</head>

<body>
<?php
include 'headerlogoutuser.php';
  session_start();
  if($_SESSION['uname'])
  //echo "Welcome ".$_SESSION['uname'];
  ?>

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

<?php

  $devidErr = "";
  $flag='0';
if(isset($_POST['submit']))
{
   $lost=$_POST['loststatus'];
   $deviceid =$_POST["deviceid"];
    $deviceid = test_input($_POST["deviceid"]);
if (!preg_match("/^[0-9 ]*$/",$deviceid)) {
   $devidErr = "Only numbers allowed";
   $flag='1'; 
    }

       $conn = mysql_connect("localhost", "root", "") or die('Could not connect');
               mysql_select_db("servicecenter")or die("cannot select DB");
               
  
       $sql = "UPDATE devicelist SET devlost='$lost' WHERE devid='$deviceid'";
 if(!$flag)
 {
   if (mysql_query($sql,$conn))
    {
    echo "Your data has been successfully added";
    }
 }
 else echo "<br>Failed to update database";  
    mysql_close($conn);
  }
    function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
    

?>
  <div class="form">
    <form action="lostdb.php" method="POST">
      Device ID    <input type="text" name="deviceid" size="50" required>
                  <span class = "error">* <?php echo $devidErr;?></span>
                  <br><br>
      Lost Status   <select name="loststatus" style="width:400px"; required><br><br>
                    <option value="1">Device Lost</option>
                    <option value="0">Device not Lost</option>
                    </select><br><br>
                   <button class="button" id="submit" name="submit">REGISTER </button>
    </form> 
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
<?php
include 'footer.php';
?>
</body>
</html>
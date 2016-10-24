<html>
<head>  
 <link rel="stylesheet" type="text/css" href="css/adddevicegateway.css" />
  <link rel="stylesheet" type="text/css" href="css/adddevice.css" />


</head>

<body>
<?php
include 'headerlogoutuser.php';
  session_start();
  if($_SESSION['uname'])
  echo "Welcome ".$_SESSION['uname'];
  else
    header("location:login.php");
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
$devidErr=" ";
$flag='0';

if(isset($_POST['submit']))
{  
    $deviceid = test_input($_POST["deviceid"]);
if (!preg_match("/^[0-9 ]*$/",$deviceid)) {
   $devidErr = "Only numbers allowed"; 
   $flag='1';
    }
   $problemtype=$_POST['problemtype'];
   $problem=$_POST['problem'];
   $value='Pending';
   $problemdes=$_POST['problemdes'];
   $userid=$_SESSION['uid'];
  

  $connection = mysql_connect("localhost", "root", "") or die('Could not connect');
               mysql_select_db("servicecenter")or die("cannot select DB");
  
   $sql1 = "INSERT INTO bookorder (userid,devid,problemtype,problem,problemdes,value) VALUES ('$userid','$deviceid','$problemtype','$problem',
                                   '$problemdes','$value')";
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
    else
      echo "Data not added to database";
}
function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }

?>
  <div class="form">
    <form action="bookrepair.php" method="POST">
      Device ID     <input type="text" name="deviceid" size="50" required>
      <span class = "error">* <?php echo $devidErr;?></span>
      <br><br>
      Problem Type  <input type="text" name="problemtype" size="50" required><br><br>
      Problem       <input type="text" name="problem" size="50" required><br><br>
      Problem Description    <input type="text" name="problemdes" size="50" required><br><br>

                    <button class="button" id="submit" name="submit">BOOK REPAIR </button>
      </form> 
  </div>
<?php
include 'footer.php';
?>
</body>
</html>
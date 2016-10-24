<html>
<head>
<title>Fix-It</title>
  
  <link rel="stylesheet" type="text/css" href="css/signup.css" />
 <link rel="stylesheet" type="text/css" href="css/adddevicegateway.css" />
  <link rel="stylesheet" type="text/css" href="css/adddevice.css" />


</head>

<body>
<?php
include 'headerlogoutuser.php';
  session_start();
  if($_SESSION['uname'])
  {
  echo "Welcome ".$_SESSION['uname'];
  }
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
  


<?php
$devErr="";
$flag='0';
if(isset($_POST['submit']))
{
   $warranty=$_POST['warranty'];
  $devid = test_input($_POST["devid"]);
if (!preg_match("/^[0-9 ]*$/",$devid)) {
   $devErr = "Only numbers allowed"; 
   $flag='1';
    }

   
   $connection = mysql_connect("localhost", "root", "") or die('Could not connect');
   mysql_select_db("servicecenter")or die("cannot select DB");
  
   $sql1 =  "UPDATE devicelist SET devwarranty='$warranty' WHERE devid='$devid'";
   if(!$flag)
   {
   if (mysql_query($sql1,$connection))
    {
    echo "Your data has been successfully added";
    }
   }
   else echo "<br>Failed to update database";
   
    mysql_close($connection);
    
}
function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }

?>
  <div class="form">
    <form action="extended.php" method="POST">
      Device ID    <input type="text" name="devid" size="50" required>
       <span class = "error">* <?php echo $devErr;?></span>
      <br><br>
      Warranty (in months)    <input type="text" name="warranty" size="50" required><br><br>
           
      <button class="button" id="submit" name="submit">APPLY</button>
      </form> 
  </div>

<?php
//include 'footer.php';
?>

</body>
</html>

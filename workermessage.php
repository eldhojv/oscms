<!DOCTYPE HTML> 
<html>
<head>
<title>Fix-It</title>
<link rel="stylesheet" type="text/css" href="css/signupmsg.css">
    <link rel="stylesheet" type="text/css" href="css/admingateway.css" />

<style>
.error {color: #FF0000;}
</style>
</head>
<body> 

<?php
  $devidErr ="";
  $flag='0';
$connection = mysql_connect("localhost", "root", "") or die('Could not connect');
mysql_select_db("servicecenter")or die("cannot select DB");
$db = mysql_select_db("servicecenter",$connection);

global $value,$devid;
if(isset($_POST['submit']))
{ 
  
  
  $msg=$_POST['message'];
  $amount=$_POST['amount'];
  $deviceid = test_input($_POST["deviceid"]);

if (!preg_match("/^[0-9 ]*$/",$deviceid)) {
   $devidErr = "Only numbers allowed"; 
   $flag='1';
    }
 
  
$sql1="UPDATE bookorder SET message='$msg',amount='$amount' WHERE devid=$deviceid";
    
if(!$flag)
{
    if (mysql_query($sql1,$connection))
    echo "Data successfully added";
    else
    echo "Error";
} 
  
  else echo "<br>Failed to update database";
 }
 mysql_close($connection);
/*if(!$connection)
{
   header('Refresh: 2; URL = updateorder.php');
}
*/
function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
 ?>

<?php
	session_start();
	if($_SESSION['uname'])
	{include 'headerlogoutworker.php';
	echo "Welcome ".$_SESSION['uname'];
    }
    else
    	header("location:login.php")
	?>


<div class="links">
  <div class="register">
    <a href="workerorderlist.php"> ORDER LIST </a>
    </div>
<div class="register">
    <a href="workermessage.php"> POST MESSAGE </a>
    </div>
    <div class="buy">
   <a href="workerorderupdate.php">UPDATE DATABASE</a>
    </div>

<div class="form">
    <form action="workermessage.php" method="POST">
         Device ID:<input type="text" name="deviceid" size="70" required>
         <span class = "error">* <?php echo $devidErr;?></span><br><br>
          Message: <textarea name="message" rows="5" cols="70"></textarea><br><br>
          Amount Details:<input type="text" name="amount" size="70" required><br>

                   <button class="button" id="submit" name="submit">MESSAGE </button>
      </form> 
  </div>


</body>
<br><br><br>
<br><br><br>
<br><br><br>
<br>
<?php
include"footer.php";?>
</html>
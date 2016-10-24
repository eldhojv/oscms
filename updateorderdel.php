<html>
<head>
  <title>Fix-it</title>
  
  <link rel="stylesheet" type="text/css" href="css/signup.css" />
</head>

<body>
<?php
include 'headerlogoutdeliverer.php';
?>
<?php
 $devidErr ="";
 $flag='0';
$connection = mysql_connect("localhost", "root", "") or die('Could not connect');
mysql_select_db("servicecenter")or die("cannot select DB");
$db = mysql_select_db("servicecenter",$connection);

global $value,$devid;
if(isset($_POST['submit']))
{ 
  
  
  $value=$_POST['status'];
  $devid=$_POST['deviceid'];
  $devid = test_input($_POST["deviceid"]);
if (!preg_match("/^[0-9 ]*$/",$devid)) {
   $devidErr = "Only numbers allowed"; 
   $flag='1';
    }
  
 }
  
$sql1="UPDATE bookorder SET value='$value' WHERE devid=$devid";
if(!$flag)
{
    if (mysql_query($sql1,$connection))

  {
  die('Your data has been successfully added.');
  }
  else{Error: ' . mysql_error()';

 }
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

  <div class="form">
    <form action="updateorderdel.php" method="POST">
      Device ID  <input type="text" name="deviceid" size="50" required>
                <span class = "error">* <?php echo $devidErr;?></span>
                 <br><br>
      Status     <select name="status" style="width:400px"; required><br><br>
                 <option value="3">Pickedup</option>
                 <option value="8">Delivered</option>
                 </select><br><br>
            
      
      <button class="button" id="submit" name="submit">UPDATE </button>
      </form> 
  </div>
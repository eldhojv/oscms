
<html>
<head>
  
  <link rel="stylesheet" type="text/css" href="css/signup.css" />


</head>

<body>
<?php
include 'headerlogout.php';
  session_start();
  if($_SESSION['uname'])
  echo "Welcome ".$_SESSION['uname'];
  ?>

  
<?php


$userid=$_SESSION['uid'];
$connection = mysql_connect("localhost", "root", "") or die('Could not connect');
mysql_select_db("servicecenter")or die("cannot select DB");


if(isset($_POST['submit']))
{	
$pass1=$_POST['pass1'];

$pass2=$_POST['pass2'];	
	
if ($pass1===$pass2)
{
  
  $password=md5($pass1);	
}

       $sql = "UPDATE login SET password='$password' WHERE userid='$userid'";
    if (mysql_query($sql,$connection))
  {
  echo "Your data has been successfully added";
  header("Refresh:1;url=loginsucc.php");
  }
    else
    	echo "Error";
 }

 ?>
</body>
</html>
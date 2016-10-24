<!DOCTYPE HTML> 
<html>
<head>
<title>Fix-It</title>
<?php include'header.php';?>
<link rel="stylesheet" type="text/css" href="css/signup.css">
<style>
.error {color: #FF0000;}
</style>
</head>
<body> 

<?php
/*$IMEIErr = $guestphnoErr = "";
$IMEI = $guestphno = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["IMEI"])) {
     $IMEIErr = "required";
   } else {
     $IMEI = test_input($_POST["IMEI"]); 
     }
   }
   
     if (empty($_POST["guestphno"])) {
     $guestphnoErr = "phone number is required";
   } else {
     $guestphno = test_input($_POST["guestphno"]);
   }


function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}*/
?>


<div class="form">
    <form action="searchlost.php" method="POST">
      IMEI:       <input type="text" name="imei" size="70" required><br><br>
                 <button class="button" id="submit" name="submit">SEARCH </button>
      </form> 
  </div>


</body>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<?php
include"footer.php";?>
</html>
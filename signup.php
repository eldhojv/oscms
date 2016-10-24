<html>
<head>
	<title>Fix-it</title>
	
	<link rel="stylesheet" type="text/css" href="css/signup.css" />
</head>

<body>
<?php
include 'header.php';
global $customerid,$customername,$customeradd1,$customeradd2,$customeradd3,$customeremail,$customerphno,$customerlocation,$custusername,$custpass1,
       $custpass2,$custtype,$id;
       $emailErr = $nameErr = $phnoErr =""; 
       $flag='0';
if(isset($_POST['submit']))
{

  $custname=$_POST['customername'];
  $custname = test_input($_POST["customername"]);
if (!preg_match("/^[a-zA-Z ]*$/",$custname)) 
{
  $nameErr = "Only letters and white space allowed"; 
  $flag='1';
}
  $username=$_POST['custusername'];
  $custadd1=$_POST['customeradd1'];
  $custadd2=$_POST['customeradd2'];
  $custadd3=$_POST['customeradd3'];
  $custemail=$_POST['customeremail'];
  $custemail = test_input($_POST["customeremail"]);
               
               // check if e-mail address is well-formed
               if (!filter_var($custemail, FILTER_VALIDATE_EMAIL))
                {
                  $emailErr = "Invalid email format"; 
                  $flag='1';
               }
  $custphno = test_input($_POST["customerphno"]);
if (!preg_match("/^[0-9 ]*$/",$custphno))
 {
  $phnoErr = "Only numbers allowed"; 
  $flag='1';
}
  $custlocation=$_POST['location'];
  $custpass1=$_POST['custpass1'];
  $custpass2=$_POST['custpass2'];
  $custpass1=$_POST['custpass1'];
  $custpass2=$_POST['custpass2'];
  $custtype='0';

  if($custpass1==$custpass2)
  {
  $custpass1=md5($custpass1);
  }



  $id=rand(0,99999);
  $connection = mysql_connect("localhost", "root", "") or die('Could not connect');
   mysql_select_db("servicecenter")or die("cannot select DB");
 
   $sql1 = "INSERT INTO customer (userid,username,custname,custadd1,custadd2,custadd3,custemail,custphno,custlocation)
   VALUES ('$id','$username','$custname','$custadd1','$custadd2','$custadd3','$custemail','$custphno','$custlocation')";

   $sql2 ="INSERT INTO login (userid,username,password,usertype) VALUES ('$id','$username','$custpass1','$custtype')";
 if($flag==0)
  {
   if (mysql_query($sql1,$connection)&&mysql_query($sql2,$connection))
    {
    echo "Your data has been successfully added";
    }

   
    mysql_close($connection);
    
 }
else
{
  echo"Submit data first";
}
}
 function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
?>
	<div class="form">
		<form action="signup.php" method="POST">
			Name       <input type="text" name="customername" size="50" required>
                <span class = "error">* <?php echo $nameErr;?></span>
                <br><br>
      Username   <input type="text" name="custusername" size="50" required><br><br>
			Address 1  <input type="text" name="customeradd1" size="50" required><br><br>
      Address 2  <input type="text" name="customeradd2" size="50" required><br><br>
      Address 3  <input type="text" name="customeradd3" size="50" required><br><br>
      Email      <input type="text" name="customeremail" size="50" required>
                 <span class = "error">* <?php echo $emailErr;?></span>
                <br><br>
      Mobile No  <input type="text" name="customerphno" size="50" required>
                 <span class = "error">* <?php echo $phnoErr;?></span>
                <br><br>
      Location   <select name="location" style="width:400px"; required><br><br>
                 <option value="ekm">Ernakulam</option>
                 <option value="tsr">Thrissur</option>
                 <option value="tvm">Trivandrum</option>
                 <option value="pkd">Palakkad</option>
                 </select><br><br>
      Password  <input type="password" id="custpass1" name="custpass1" size="50" required><br><br>
			Confirm password <input type="password" id="custpass2" name="custpass2" size="50" onkeyup="checkpass()" required><br> <p> <span id="cmsg"></span></p><br><br>
			
			
			<button class="button" id="submit" name="submit">REGISTER </button>
			</form>	
	</div>
  <?php
 // header("homepage.php");
  ?>
<script>
  function checkpass () 
  {
      var pa1=document.getElementById('custpass1');
      var pa2=document. getElementById('custpass2');
      var message = document.getElementById('cmsg');
        if (pa1.value==pa2.value) 
                    {
                    message.innerHTML = "Passwords Match!"    
                    }
           else
            {
              message.innerHTML = "Passwords Do Not Match!"
            }
        
  }
</script>
<?php
include 'footer.php';
?>
</body>
</html>
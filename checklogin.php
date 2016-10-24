<?php
include 'header.php';  
session_start();

	$con=mysql_connect("localhost","root","") or die(mysql_error());
            mysql_select_db("servicecenter") or die(mysql_error());
            
			$myusername=$_POST['myusername'];
			$mypassword=$_POST['mypassword'];
			$myusername=stripslashes($myusername);
			$mypassword=stripslashes($mypassword);
			$password=md5($mypassword);
          
          $sql="SELECT * FROM login where username='$myusername' and password='$password'";
          $result=mysql_query($sql);
          $row=mysql_fetch_assoc($result);
          $count=mysql_num_rows($result);
          
	       if($count==1)
            {
              $uid=$row['userid'];
              $uname=$row['username'];
              $_SESSION['uid']=$uid;
            	$_SESSION['uname']=$uname;
	            if($row['usertype']==1)
              header("location:adminhome.php");
              else if($row['usertype']==2)
              header("location:workerhome.php"); 
              else if($row['usertype']==3)
              header("location:delivererhome.php"); 
              else
              header("location:loginsucc.php");	
              }
         else {
                echo "Error.! Wrong Username or Password";
              } 	
 
mysql_close($con);

   ?>
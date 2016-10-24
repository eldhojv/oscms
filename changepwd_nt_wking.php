<html>
<head>
  <title>Fix-it</title>
  
  <link rel="stylesheet" type="text/css" href="css/adddevicegateway.css" />
  <link rel="stylesheet" type="text/css" href="css/adddevice.css" />


</head>


<body>
<?php
include 'headerlogout.php';
 session_start();
 
 ?>

  
  </div>
  <div class="links">
  <div class="register">
    <a href="adddevice.php"> REGISTER DEVICE </a>
    </div>

    <div class="buy">
   <a href="bookrepair.php">BOOK REPAIR</a>
    </div>
    
    <div class="sell">
    <a href="repairhistory.php"><strong> REPAIR HISTORY </strong></a> 
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




  
  <div class="form">
    <form action="action.php" method="POST">
      
      Password  <input type="password" id="pass1" name="pass1" size="50" required><br><br>
      Confirm password <input type="password" id="pass2" name="pass2" size="50" onkeyup="checkpass()"><br>
                    <p> <span id="cmsg"></span></p>
  
      
      <button class="button" id="submit" name="submit">SUBMIT </button>
      </form> 
  </div>
  <script>
  function checkpass () {
      var pa1=document.getElementById('pass1');
      var pa2=document. getElementById('pass2');
      var message = document.getElementById('cmsg');
        if (pa1.value==pa2.value) {
                    message.innerHTML = "Passwords Match!"    
                                      }
           else
            {
              message.innerHTML = "Passwords Do Not Match!"
            }
        
  }
</script>
</body>
</html>
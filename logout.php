<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
	
header("Location: login.php?logout=success"); // Redirecting To Home Page
}
?>
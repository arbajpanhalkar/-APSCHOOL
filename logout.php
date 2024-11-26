<?php
session_start();  // Start the session

// Destroy all session variables
session_unset();

// Destroy the session
session_destroy();

// Redirect to login page
header("Location: adminlogin.php");  // Change to your actual login page URL
exit;
?>
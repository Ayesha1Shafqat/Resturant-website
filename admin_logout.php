<?php
session_start();

// Remove only admin session variable
unset($_SESSION['admin_email']);

// (Optional) Destroy all session data
session_destroy();

// Redirect to admin login page
header("Location: admin_login.php");
exit();
?>

<?php
// Start the session
session_start();

// Destroy all session variables
session_unset();

// Destroy the session
session_destroy();

// Optionally, remove any cookies related to the session (if any)
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 3600, '/'); // Set a past expiration time
}

// Redirect the user to the login page or home page after logout
header("Location: login2.php");  // Redirect to login page
exit();  // Ensure no further code is executed
?>


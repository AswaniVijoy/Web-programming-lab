

<?php

$servername = "localhost";

$username = "root";  // Change as per your configuration

$password = "";      // Change as per your configuration

$dbname = "userdb";

// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

}

?>





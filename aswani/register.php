
<?php
// Database connection
$con = new mysqli("localhost", "root", "", "student1");

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

if (isset($_POST['submit'])) {
    // Retrieving form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phn = $_POST['phn'];
    $course = $_POST['course'];
    $password = $_POST['password'];

    // Prepare SQL query using prepared statements
    $stmt = $con->prepare("INSERT INTO student2 ('Name','Email','Phone','Course','Password') VALUES ('name','email','phn','course','password')");
    
    // Bind parameters
    $stmt->bind_param("sssss", $name, $email, $phn, $course, $password);
    
    // Execute the query
    if ($stmt->execute()) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $stmt->error;
    }
    
    // Close statement and connection
    $stmt->close();
    $con->close();
}
?>



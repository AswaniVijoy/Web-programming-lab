<?php
session_start();
$con = new mysqli("localhost", "root", "", "student1");

if (isset($_POST['submit'])) {
    // Retrieving form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare and execute SQL query using prepared statements
    $stmt = $con->prepare("SELECT * FROM student2 WHERE Email = ? AND Password = ?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if login is successful
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['email'] = $row['Email']; // Storing email in session variable

        echo "<script>alert('Login successful');</script>";
        header("Location: dashboard2.php"); // Redirect to dashboard
        exit();
    } else {
        echo "<script>alert('Login unsuccessful');</script>";
    }

    $stmt->close();
    $con->close();
}
?>


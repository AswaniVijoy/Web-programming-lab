<?php
session_start();

if (!isset($_SESSION['email'])) {
    // Redirect to login if the user is not logged in
    header("Location: login2.php");
    exit();
}

$con = new mysqli("localhost", "root", "", "student1");

// Get the user's email from session
$email = $_SESSION['email'];

// Fetch user data from the database
$stmt = $con->prepare("SELECT * FROM student2 WHERE Email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $name = $row['Name'];
    $email = $row['Email'];
    $phn = $row['Phone'];
    $course = $row['Course'];

    // Display user data in a table
    echo "<table border=1>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Course</th>
            </tr>
            <tr>
                <td>$name</td>
                <td>$email</td>
                <td>$phn</td>
                <td>$course</td>
            </tr>
          </table>";
} else {
    echo "No user found!";
}

$stmt->close();
$con->close();
?>


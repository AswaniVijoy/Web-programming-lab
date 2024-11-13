<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extract Username from Email</title>
</head>
<body>

    <h2>Extract Username from Email</h2>
    
    <!-- Simple Form to take email input -->
    <form method="POST" action="">
        <label for="email">Enter your email:</label>
        <input type="email" name="email" id="email" required>
        <input type="submit" value="Extract">
    </form>

    <?php
    // Check if the form has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        
        // Extract the username before the '@' symbol
        $userName = strtok($email, '@');

        // Display the username
        echo "<h3>User name: $userName</h3>";
    }
    ?>

</body>
</html>

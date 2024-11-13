<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sort Array in Reverse Order</title>
</head>
<body>

    <h2>Enter Numbers to Sort in Reverse Order</h2>
    
    <!-- Form to take user input -->
    <form method="POST" action="">
        <label for="numbers">Enter numbers (comma separated):</label>
        <input type="text" name="numbers" id="numbers" required>
        <input type="submit" value="Sort">
    </form>

    <?php
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the user input and split the input into an array
        $input = $_POST['numbers'];

        // Convert the input string into an array by separating values based on comma
        $numbers = array_map('trim', explode(',', $input));

        // Convert the array elements to integers (optional but recommended for numeric sorting)
        $numbers = array_map('intval', $numbers);

        // Sort the array in reverse order (highest to lowest)
        rsort($numbers);

        // Display the original and sorted arrays
        echo "<h3>Original Array (from user input):</h3>";
        echo "<pre>";
        print_r($numbers);
        echo "</pre>";
    }
    ?>

</body>
</html>

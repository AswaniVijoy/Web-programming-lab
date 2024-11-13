<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armstrong Number Checker</title>
</head>
<body>

    <h2>Check if a Number is Armstrong</h2>
    <form method="POST" action="">
        <label for="number">Enter a number:</label>
        <input type="number" name="number" id="number" required>
        <input type="submit" value="Check Armstrong">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the number from user input
        $number = $_POST['number'];

        // Convert the number to a string to count digits
        $originalNumber = $number;
        $numOfDigits = strlen($number);

        $sum = 0;
        // Calculate the sum of the digits raised to the power of the number of digits
        while ($number > 0) {
            $digit = $number % 10;
            $sum += pow($digit, $numOfDigits);
            $number = (int)($number / 10); // Remove the last digit
        }

        // Check if the sum equals the original number
        if ($sum == $originalNumber) {
            echo "<h3>$originalNumber is an Armstrong number.</h3>";
        } else {
            echo "<h3>$originalNumber is not an Armstrong number.</h3>";
        }
    }
    ?>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Calculator</title>
</head>
<body>
    <h2>Factorial Calculator</h2>
    <form method="post">
        Enter a number: <input type="number" name="number" min="0" required>
        <input type="submit" name="submit" value="Calculate Factorial">
    </form>

    <?php
        if (isset($_POST['submit'])) {
        // Get the user input and ensure it's a non-negative integer
        $number = $_POST['number'];
        if ($number < 0) {
            echo "<h3>Factorial is not defined for negative numbers.</h3>";
        } else {
            $factorial = 1;

            // Calculate factorial using a loop
            for ($i = 1; $i <= $number; $i++) {
                $factorial *= $i;
            }

            // Special case for 0! (by definition, 0! = 1)
            if ($number == 0) {
                $factorial = 1;
            }

            // Output the result
            echo "<h3>The factorial of $number is $factorial.</h3>";
        }
    }
    ?>
</body>
</html>

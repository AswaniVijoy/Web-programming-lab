<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum of Prime Numbers Less Than N</title>
</head>
<body>

    <h2>Compute the Sum of Prime Numbers Less Than N</h2>
    
    <form method="POST" action="">
        <label for="number">Enter a number (N):</label>
        <input type="number" name="number" id="number" required>
        <input type="submit" value="Compute Sum">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the number N from user input
        $n = intval($_POST['number']);
        
        // Initialize sum variable
        $sum = 0;

        // Loop through all numbers less than N and check if they are prime
        for ($i = 2; $i < $n; $i++) {
            // Assume that $i is a prime number
            $isPrime = true;

            // Check if the number is divisible by any number from 2 to sqrt(i)
            for ($j = 2; $j <= sqrt($i); $j++) {
                if ($i % $j == 0) {
                    $isPrime = false;
                    break;  // No need to check further, $i is not prime
                }
            }

            // If $i is prime, add it to the sum
            if ($isPrime) {
                $sum += $i;
            }
        }

        // Display the result
        echo "<h3>The sum of prime numbers less than $n is: $sum</h3>";
    }
    ?>

</body>
</html>

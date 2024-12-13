<html>
<head>
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
        
        $number = $_POST['number'];
        if ($number < 0) {
            echo "<h3>Factorial is not defined for negative numbers.</h3>";
        } else {
            $factorial = 1;

            
            for ($i = 1; $i <= $number; $i++) {
                $factorial *= $i;
            }

            
            if ($number == 0) {
                $factorial = 1;
            }

            
            echo "<h3>The factorial of $number is $factorial.</h3>";
        }
    }
    ?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime </title>
</head>
<body>

    
    
    <form method="POST" action="">
        <label for="number">Enter a number (N):</label>
        <input type="number" name="number" id="number" required>
        <input type="submit" value="Compute Sum">
    </form>

    <?php
    
        
        $n = intval($_POST['number']);
        
        
        $sum = 0;

       
        for ($i = 2; $i < $n; $i++) {
            
            $isPrime = true;

           
            for ($j = 2; $j <= sqrt($i); $j++) {
                if ($i % $j == 0) {
                    $isPrime = false;
                    break; 
                }
            }

            
            if ($isPrime) {
                $sum += $i;
            }
        }

        
        echo "<h3>The sum of prime numbers less than $n is: $sum</h3>";
    
    ?>

</body>
</html>

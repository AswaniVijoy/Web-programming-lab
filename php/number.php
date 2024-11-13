<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Calculator</title>
</head>
<body>
    
    <form method="post">
        Enter a number: <input type="number" name="number"  required>
        <input type="submit" name="submit" >
    </form>

    <?php
        if (isset($_POST['submit'])) {
        // Get the user input and ensure it's a non-negative integer
        $number = $_POST['number'];
        if ($number < 0) {
            $result="Negetive Number";
        }
        elseif ($number > 0) {
            $result="Positive Number";
        }  else {
            $result=0;
        }
        echo "Number is $result";
    }
    ?>
</body>
</html>

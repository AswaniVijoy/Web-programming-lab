<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Calculator</title>
</head>
<body>
    
    <form method="post">
        Number 1: <input type="number" name="num1">
        Number 2: <input type="number" name="num2">
        <input type="submit" name="submit" >
    </form>

    <?php
        if (isset($_POST['submit'])) {
        $number1 = $_POST['num1'];
        $number2 = $_POST['num2'];
        $sum=$number1+$number2;
        echo "Sum of $number1 + $number2 = $sum";
    }
    ?>
</body>
</html>

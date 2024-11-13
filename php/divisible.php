<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Calculator</title>
</head>
<body>
    
    <form method="post">
        Number: <input type="number" name="num">
        Divisor: <input type="number" name="div">
        <input type="submit" name="submit" >
    </form>

    <?php
        if (isset($_POST['submit'])) {
        $number = $_POST['num'];
        $divisor = $_POST['div'];

        if($divisor==0){
            echo "Division by 0 is not possible";
        }
        else{
        if($number%$divisor==0){
            echo "$number is divisible by $divisor";
        }
        else{
            echo "Not divisible";
        }
        }
    }
    ?>
</body>
</html>

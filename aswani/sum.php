<html>
<head>
    <title>sum</title>
</head>
<body>
    <form method="post">
        Number 1: <input type="text" name="num1" required><br><br>
        Number 2: <input type="text" name="num2" required><br><br>
        <input type="submit" name="submit" value="SUM">
    </form>
    
    <?php
     if (isset($_POST['submit'])) {
        
        $number1= (int)$_POST['num1'];
        $number2= (int)$_POST['num2'];
        $sum=$number1+$number2;
        echo "Sum = $sum";
      
      
    }
        
    ?>


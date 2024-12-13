<html>
<head>
    <title>divisible</title>
</head>
<body>
    <form method="post">
        Number: <input type="text" name="num" required><br><br>
        Divisor: <input type="text" name="divisor" required><br><br>
        <input type="submit" name="submit">
    </form>
    
    <?php
     if (isset($_POST['submit'])) {
        
        $number= (int)$_POST['num'];
        $divisor= (int)$_POST['divisor'];
        
        if($divisor==0){
        echo "Division by 0 is not possible";
        }
        else{
        if($number%$divisor==0){
        echo "$number is divisible by $divisor";
        }
        else{
        echo "Not Divisible";
        }
        }
      
    }
        
    ?>


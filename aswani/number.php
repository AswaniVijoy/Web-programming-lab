<html>
<head>
    <title>positive</title>
</head>
<body>
    <form method="post">
        Enter a number: <input type="text" name="number" min="0" required>
        <input type="submit" name="submit" >
    </form>
    
    <?php
     if (isset($_POST['submit'])) {
        
        $number = (int)$_POST['number'];
        if($number<0){
        echo "$number is negative";
        }
        else if($number>0){
        echo "$number is positive";
        }
        else{
        echo "zero";
        }
    }
        
    ?>


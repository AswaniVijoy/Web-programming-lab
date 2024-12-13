<html>
<head>
    <title>armstrong</title>
</head>
<body>
    <form method="post">
        Enter a number: <input type="number" name="number" min="0" required>
        <input type="submit" name="submit" value="Check">
    </form>

    <?php
        if (isset($_POST['submit'])) {
        
        $number = $_POST['number'];
        $sum=0;
        $temp=$number;
        $digitnum=strlen($number);
        
        while($temp>0){
        $digit=$temp%10;
        $sum+=pow($digit,$digitnum);
        $temp=$temp/10;
        }
            
        if($sum==$number){
        echo "$number is an armstrong number";
        }
        else{
        echo "$number is not an armstrong number";
        }
      }
    ?>
</body>
</html>

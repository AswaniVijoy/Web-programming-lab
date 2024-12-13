<html>
<head>
    <title>area</title>
</head>
<body>
    <form method="post">
        Breadth: <input type="text" name="breadth" required><br><br>
        Height: <input type="text" name="height" required><br><br>
        <input type="submit" name="submit" value="Calculate Area">
    </form>
    
    <?php
     if (isset($_POST['submit'])) {
        
        $breadth= (int)$_POST['breadth'];
        $height= (int)$_POST['height'];
        $area = 0.5 * $breadth * $height;
        echo "Area = $area";
      
      
    }
        
    ?>


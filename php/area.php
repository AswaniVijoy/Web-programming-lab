<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Calculator</title>
</head>
<body>
    
    <form method="post">
        Breadth: <input type="number" name="breadth">
        Height: <input type="number" name="height">
        <input type="submit" name="submit" >
    </form>

    <?php
        if (isset($_POST['submit'])) {
        $breadth = $_POST['breadth'];
        $height = $_POST['height'];
        $area = 0.5 * $breadth * $height;
        echo "Area of Triangle = $area";
    }
    ?>
</body>
</html>

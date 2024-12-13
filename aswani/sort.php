<html>
<head>
    <title>Sort</title>
</head>
<body>

    <h2>Enter Numbers to Sort in Reverse Order</h2>
    
    
    <form method="POST" action="">
        <label for="numbers">Enter numbers (comma separated):</label>
        <input type="text" name="numbers" id="numbers" required>
        <input type="submit" value="Sort">
    </form>

    <?php
 
    
    
        $input = $_POST['numbers'];
		$numbers = explode(',', $input); 
        rsort($numbers);
        echo "<pre>";
        print_r($numbers);
        echo "</pre>";
    
    ?>

</body>
</html>

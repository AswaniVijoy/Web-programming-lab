<html>
<head>
    <title>email </title>
</head>
<body>

    
    
    <form method="POST" action="">
        <label for="number">Enter your email:</label>
        <input type="email" name="email">
        <input type="submit" value="Extract">
    </form>

    <?php
    
        $email=$_POST['email'];
        $username=strtok($email,'@');
        echo "<h3>User name : $username</h3>";
        
    ?>

</body>
</html>

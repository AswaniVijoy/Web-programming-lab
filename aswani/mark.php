
<html>
<head>
    
    <title>Check Student Grade</title>
</head>
<body>
    <h2>Enter Marks to Check Your Grade</h2>

   
    <form method="POST" action="">
        <label for="marks">Enter Marks: </label>
        <input type="text" name="marks"required><br><br>
        <label for="mark">Enter Total Marks: </label>
        <input type="text" name="mark"  required><br><br>
        <input type="submit" name="submit" value="Check Grade">
    </form>

    <?php
    
 
        
        $marks = (int)$_POST['marks'];
		$per=(int)$_POST['mark'];
        $p=$marks/$per*100;
        
            if ($p >= 60) {
				        echo "First division";
				    } else if ($p >= 45) {
				        echo "Second division";
				        }
				        else if ($p >= 33){
				        echo "Third division";
				    }
				    else {
				        echo "Failed";
				    }

          
       

    ?>
</body>
</html>

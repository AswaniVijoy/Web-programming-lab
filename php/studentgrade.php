<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Student Grade</title>
</head>
<body>
    <h2>Enter Marks to Check Your Grade</h2>

    <!-- Form to take user input (marks) -->
    <form method="POST" action="">
        <label for="marks">Enter Marks: </label>
        <input type="text" name="marks" id="marks" required><br><br>
        <input type="submit" name="submit" value="Check Grade">
    </form>

    <?php
    // Check if form is submitted
    if (isset($_POST['submit'])) {
        // Get the marks from the form
        $marks = $_POST['marks'];

        // Validate the input (check if it's numeric and within the valid range)
        if (is_numeric($marks) && $marks >= 0 && $marks <= 100) {
            // Check the grade based on marks
            if ($marks >= 90) {
                $grade = 'A';
            } elseif ($marks >= 80) {
                $grade = 'B';
            } elseif ($marks >= 70) {
                $grade = 'C';
            } elseif ($marks >= 60) {
                $grade = 'D';
            } elseif ($marks >= 50) {
                $grade = 'E';
            } else {
                $grade = 'F';
            }

            // Display the grade
            echo "<h3>The grade for a student with $marks marks is: $grade</h3>";
        } else {
            // If the input is not valid (not a number or out of range)
            echo "<h3>Please enter a valid number between 0 and 100.</h3>";
        }
    }
    ?>
</body>
</html>

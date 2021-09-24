<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 3</title>
    <meta charset="utf-8">
    <meta name="description" content="Advanced Web Development">
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP">
    <meta name="author" content="Mario Stavreski">
</head>
<body>
    <h1>Lab 3 - Task 2</h1>
    <?php
        
        function is_leapyear ($year) {
            if ((($year % 4) == 0) && ((($year % 100) != 0) || (($year % 400) == 0))) {
                return true;
            } 
            else {
                return false;
            }
        }
        if (isset ($_GET["year"])) { // check if form data exists
            $entered = $_GET["year"]; // obtain the form data
        }

        if (is_leapyear($entered)) {
            echo "<p style='color: green;'>The year you entered is a leap year.</p>";
        }
        else if (!is_leapyear($entered)) {
            echo "<p style='color: red;'>The year you entered is not a leap year.</p>";
        }
    ?>

    
</body>
</html>

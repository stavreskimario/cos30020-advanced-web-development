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
    <h1>Lab 3 - Task 3</h1>
    <?php
        function is_prime($num){ 
            if ($num == 1) 
            return false; 
            for ($i = 2; $i <= $num / 2; $i++){ 
                if ($num % $i == 0) 
                    return false; 
            } 
            return true; 
        } 
        
        if (isset ($_GET["number"])) { // check if form data exists
            $num = $_GET["number"]; // obtain the form data
        }

        if (is_prime($num)) {
            echo "<p style='color: green;'>The number you entered is a prime number.</p>";
        }
        else if (!is_prime($num)) {
            echo "<p style='color: red;'>The number you entered is not a prime number.</p>";
        }
    ?>

    
</body>
</html>

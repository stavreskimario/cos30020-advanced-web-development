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
    <?php include("mathfunctions.php")?>
    <h1>Web Programming - Lab 3</h1>
    <?php
        if (isset ($_GET["number"])) { // check if form data exists
            $num = $_GET["number"]; // obtain the form data
            if ($num > 0) { // check if $num is a positive number
                if ($num == round ($num)) { // check if $num is an integer
                    echo "<p>", $num, "! is ", factorial ($num), ".</p>";
                } else { // number is not an integer
                    echo "<p>Please enter an integer.</p>";
                }
            } else { // number is not positive
                echo "<p>Please enter a positive integer. </p>";
            }
        } else { // no input
            echo "<p>Please enter a positive integer.</p>";
        }
                
    ?>

    
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 3</title>
    <meta charset="utf-8">
    <meta name="description" content="Advanced Web Develpoment">
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP">
    <meta name="author" content="Mario Stavreski">
</head>
<body>
    <?php
        function factorial ($n) {           // declare the factorial function
        $result = 1;                        // declare and initialise the result variable
        $factor = $n;                       // declare and initialise the factor variable
        while ($factor > 1) {               // loop to multiple all factors until 1
            $result = $result * $factor;
            $factor--;                      // next factor
        }                                   // Note that the factor 1 is not multiplied
        return $result;
        }
        
    ?>

    
</body>
</html>

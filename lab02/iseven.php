<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 2</title>
    <meta charset="utf-8">
    <meta name="description" content="Web development">
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP">
    <meta name="author" content="Mario Stavreski">
</head>
<body>
    <h1>Web Programming - Lab 2</h1>
    <?php
    $value = 4;
    function check($value){ 
        if($value % 2 == 0){ 
            echo "<p>The value $value is numeric and even</p>";
        } 
        else{ 
            echo "<p>The value $value is not numeric and even</p>";
        } 
    } 
    check($value);
    ?>

    
</body>
</html>

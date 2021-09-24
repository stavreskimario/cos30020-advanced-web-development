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
    $days = array ("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");       // declare and initialise array
    echo "<p>The days of the week in English are: <br>";
    foreach($days as $value){
        echo $value . ", ";
    }                 
    
    $days[0] = "Lundi"; 
    $days[1] = "Mardi";                                                                                     // modify elements
    $days[2] = "Mercredi";
    $days[3] = "Jeudi";
    $days[4] = "Vendredi";
    $days[5] = "Samedi";
    $days[6] = "Dimanche";

    echo "<p>The days of the week in French are: <br>";
    foreach($days as $value){
        echo $value . ", ";
    }
    ?>

    
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="description" content="Web application development" />
    <meta name="keywords" content="PHP" />
    <meta name="author" content="Mario Stavreski" />
    <title>Lab 4</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <h1>Web Programming - Lab 4</h1>
    <?php 
    if (isset ($_POST["string"])){                           // check if form data exists
        $str = $_POST["string"];                             // obtain the form data
        $newStr = str_replace([" ", "'", ".", ",", "!", "?"], '', $str);
        $string = strtolower($newStr);
        if (strcmp($string,strrev($string)) == 0){
            echo"<p class='alert alert-success'>This is a standard palindrome!</p>";
        }
        else
        {
            echo"<p class='alert alert-danger'>This is not a standard palindrome</p>";
        }
    }
?>

    <form action="standardpalindromeself.php" method="POST">
        <div class="form-group">
            <label for="string">String:</label>
            <input class="form-control" type="string" id="string" name="string">
            <button class="btn btn-primary" type="submit" value="submit">Check for Palindrome</button>
        </div>
    </form>
</body>

</html>
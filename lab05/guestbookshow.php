<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="description" content="Web application development" />
    <meta name="keywords" content="HTML, PHP" />
    <meta name="author" content="Mario Stavreski" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Lab 5</title>
</head>

<body>
    <h1>Lab 5 Task 2 - Guestbook</h1>
    <?php // read the comments for hints on how to answer each item
        $filename = "../../data/lab05/guestbook.txt";
        $dir = "../../data/lab05";
        
        if (file_exists($dir) && is_readable($filename)) {
            $handle = fopen($filename, "r");
            $data = file_get_contents($filename);
            $data = stripslashes($data);
            echo "<pre>$data</pre>";
            fclose($handle);
        } else {
            echo"<p class='alert alert-danger'>File is unreadable or does not exist</pre>";

        }
    ?>
</body>

</html>
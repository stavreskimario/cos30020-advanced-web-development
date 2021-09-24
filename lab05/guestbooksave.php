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
    <hr>
    <?php 
    if ( isset($_POST["first"]) && isset($_POST["last"]) ) { // check if both form data exists
        $first = $_POST["first"]; // obtain the form first data
        $last = $_POST["last"]; // obtain the form last data
        $filename = "../../data/lab05/guestbook.txt"; // assumes php file is inside lab05
        umask(0007);
        $dir = "../../data/lab05";
        if (!file_exists($dir)) {
            mkdir($dir, 02770);
        }
        $handle = fopen($filename, "a"); // open the file in append mode
        if (is_writable($filename)) {   //check if writable
            $first = addslashes($first); //add slashes to escape characters from form input
            $last = addslashes($last);
            $data = $first . "," . $last . "\r\n"; // concatenate first and last delimited by comma and end of line character
            if (fwrite($handle, $data) === false) { //checks if write failed
                echo"<p class='alert alert-danger'>Cannot add your name to the Guest book</p>";
            } else { //if write was successful
                echo"<p class='alert alert-success'>Thank you for signing the Guest book</p>";
            }
            fclose($handle); // close the text file
        } else {
            echo"<p class='alert alert-danger'>Cannot add your name to the Guest book</p>";
            fclose($handle); // close the text file
        }
    } else { // no input
        echo "<p>Please use the back button in your browser and fill out the form.</p>";
    }
    ?>
    <a href="guestbookshow.php" style="margin-top:10px;" class="btn btn-primary">Show Guest Book</a>
</body>

</html>
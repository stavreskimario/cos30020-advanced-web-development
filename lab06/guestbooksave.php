<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="description" content="Web application development" />
    <meta name="keywords" content="PHP" />
    <meta name="author" content="Mario Stavreski" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Lab 6</title>
</head>

<body>
    <h1>Lab 6 Task 2 - Guestbook</h1>
    <hr>
    <?php 
    if ( isset($_POST["name"]) && isset($_POST["email"]) ) { // check if both form data exists
        $name = $_POST["name"]; // obtain the form first data
        $email = $_POST["email"]; // obtain the form last data
        $filename = "../../data/lab06/guestbook.txt"; // assumes php file is inside lab05
        umask(0007);
        $dir = "../../data/lab06";
        if (!file_exists($dir)) {
            mkdir($dir, 02770);
        }
        $handle = fopen($filename, "a"); // open the file in append mode
        $alldata = array();
        if (is_writable($filename)) {
            $itemdata = array();
            $handle = fopen($filename, "r"); // open the file in append mode
            while (! feof($handle)) {
                $onedata = fgets($handle);
                if ($onedata !== "") {
                    $data = explode("," , $onedata);
                    $alldata[] = $data;
                    $itemdata[] = $alldata[0];
                }
            }
            fclose($handle);
            $newdata = !(in_array($name, $itemdata));
        } else {
            $newdata = true;
        }
        if ($newdata) {
            $handle = fopen($filename, "a");
            $data = $name . "," . $email . "\n"; // concatenate first and last delimited by comma and end of line character
            fputs($handle, $data);
            echo"<p class='alert alert-success'>Thanks for signing<p>";
            fclose($handle); // close the text file
        } else {
            echo"<p class='alert alert-danger'>You have already signed!</p>";

        }
    } else { // no input
        echo "<p>Please use the back button in your browser and fill out the form.</p>";
    }
    ?>
    <a href="guestbookshow.php" style="margin-top:10px;" class="btn btn-primary">Show Guest Book</a>
</body>

</html>
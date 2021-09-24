<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="description" content="Web application development" />
    <meta name="keywords" content="PHP" />
    <meta name="author" content="Mario Stavreski" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Lab 6</title>
</head>

<body>
    <h1>Web Programming - Lab 6</h1>
    <?php // read the comments for hints on how to answer each item
    if ( isset($_POST["item"]) && isset($_POST["quantity"]) ) { // check if both form data exists
        $item = $_POST["item"]; // obtain the form item data
        $qty = $_POST["quantity"]; // obtain the form quantity data
        $filename = "../../data/shop.txt"; // assumes php file is inside lab05
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
            $newdata = !(in_array($item, $itemdata));
        } else {
            $newdata = true;
        }
        if ($newdata) {
            $handle = fopen($filename, "a"); // open the file in append mode
            $data = $item . "," . $qty . "\n"; // concatenate item and qty delimited
            // by comma
            fputs($handle, $data); // write string to text file
            fclose ($handle); // close the text file

            $alldata [] = array($item, $qty); // add data to array

            echo "<p>Shopping item added</p>";
        } else {
            echo "<p>Shopping item already exists</p>";
        }
        sort($alldata); // sort array elements
        echo "<p>Shopping List</p>";
        foreach($alldata as $data) { // loop using for each
            echo "<p>", $data [0], " -- ", $data[1], "</p>";
        }
        } else { // no input
                echo "<p>Please enter item and quantity in the input form.</p>";
        }
?>
</body>

</html>
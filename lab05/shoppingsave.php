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
    <h1>Web Programming - Lab 5</h1>
    <?php // read the comments for hints on how to answer each item
    if ( isset($_POST["item"]) && isset($_POST["quantity"]) ) { // check if both form data exists
        $item = $_POST["item"]; // obtain the form item data
        $qty = $_POST["quantity"]; // obtain the form quantity data
        $filename = "../../data/shop.txt"; // assumes php file is inside lab05
        $handle = fopen($filename, "a"); // open the file in append mode
        $data = $item . "," . $qty; // concatenate item and qty delimited by comma
        fwrite($handle, $data); // write string to text file
        fclose($handle); // close the text file
        echo "<p>Shopping List</p> "; // generate shopping list
        $handle = fopen($filename, "r"); // open the file in read mode
        while (!feof($handle)) { // loop while not end of file
        $data = fgets($handle); // read a line from the text file
        echo "<p>", $data, "</p>"; // generate HTML output of the data
        }
        fclose($handle); // close the text file
    } else { // no input
        echo "<p>Please enter item and quantity in the input form.</p>";
    }
?>
</body>

</html>
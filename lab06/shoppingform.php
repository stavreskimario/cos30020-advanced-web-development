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
    <h1>Web Programming Form - Lab 6</h1>
    <form action="shoppingsave.php" method="POST">
        <div class="form-group">
            <label style="margin-top:10px;" for="item">Item Name:</label>
            <input class="form-control" type="text" id="item" name="item">
            <label style="margin-top:10px;" for="quantity">Quantity:</label>
            <input class="form-control" type="number" id="quantity" name="quantity">
            <button style="margin-top:10px;" class="btn btn-primary" type="submit" value="submit">Save</button>
        </div>
    </form>
</body>

</html>
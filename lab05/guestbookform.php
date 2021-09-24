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
    <form action="guestbooksave.php" method="POST">
        <h3>Enter your details to sign our guest book</h3>
        <div class="form-group">
            <label style="margin-top:10px;" for="first">First Name:</label>
            <input class="form-control" type="text" id="first" name="first">
            <label style="margin-top:10px;" for="last">Last Name:</label>
            <input class="form-control" type="text" id="last" name="last">
            <button style="margin-top:10px;" class="btn btn-primary" type="submit" value="submit">Save</button>
            <a href="guestbookshow.php" style="margin-top:10px;" class="btn btn-primary">Show Guest Book</a>
        </div>
    </form>
</body>

</html>
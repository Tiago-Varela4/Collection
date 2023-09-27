<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Collection TV Shows</title>

    <meta name="description" content="Collection TV Shows">
    <meta name="author" content="Tiago Varela">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">

    <link rel="icon" href="images/favicon.png" sizes="192x192">
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="apple-touch-icon" href="images/favicon.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
</head>
<body>
<section id="form">
    <h3>New show</h3>
    <form action="processform.php" method="post">
        <label for="sname">Show name:</label>
        <input type="text" id="sname" name="sname"><br><br>
        <label for="gname">Genre:</label>
        <input type="text" id="gname" name="gname"><br><br>
        <label for="ryear">Release Year:</label>
        <input type="number" id="ryear" name="ryear"><br><br>
        <label for="image">Image:</label>
        <input type="text" id="cover" name="cover"><br><br>
        <label for="alt">Alt message:</label>
        <input type="text" id="mesage" name="message"><br><br>
        <button type="submit">Submit</button>
    </form>
</section>
</body>
</html>

<?php

require_once 'database.php';
require_once 'showCollection.php';
?>
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

<header>
    <div id="toppage">
        <div id="title">
            <h1>Collection TV Shows</h1>
        </div>
    </div>
</header>

<section id="list">

    <?php
    $items = fetchCollection($pdo);

    $html = showCollection($items);

    echo $html;
    
    ?>

</section>

<!--<h1>Forms Intro</h1>-->

<!--<form action="processform.php" method="post">-->
<!--    <label for="integer-input">integer 1:</label>-->
<!--    <input id="number-input" type="number" name="number1">-->
<!---->
<!--    <label for="integer-input">integer 2:</label>-->
<!--    <input id="number-input" type="number" name="number2">-->
<!---->
<!--    <button type="submit">Submit</button>-->
<!--</form>-->

</body>
</html>

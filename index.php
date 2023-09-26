<?php
$host = 'db';
$db = 'collection';
$user = 'root';
$password = 'password';

$dns = "mysql:host=$host;dbname=$db;";

$options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];

try {
    $pdo = new PDO($dns, $user, $password, $options);
} catch (PDOException $exception) {
    echo '<p>There was an error connecting to the db</p>';
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Collection TV Shows</title>

    <meta name="description" content="Intro to forms with PHP">
    <meta name="Tiago Varela" content="Collection Project">

    <!-- <link rel="stylesheet" href="css/normalize.css"> -->
    <link rel="stylesheet" href="css/styles.css">

    <link rel="icon" href="images/favicon.png" sizes="192x192">
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="apple-touch-icon" href="images/favicon.png">

    <!-- <script defer src="js/index.js"></script> -->
</head>

<body>

<header>
    <div id="toppage">
        <div id="title">
            <h1>Collection TV Shows</h1>
        </div>
    </div>
</header>

<section id="items">
    <?php
    $items = ["test"];
    $html = "";
    foreach ($items as $item) {
        $html = '<div class="item1">'
            . '<img src="" alt="">'
            . '</div> ';
    }
    echo $html;

    $query = $pdo->prepare('SELECT `shows`.`name`, `genres`.`name` AS `genre`, `release year` FROM `shows` INNER JOIN `genres` ON `shows`.`genre` = `genres`.`id`;');

    $query->execute();

    $result = $query->fetchALL();

    echo '<pre>';
    print_r($result);
    echo '</pre>';
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

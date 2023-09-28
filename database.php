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

function fetchCollection(PDO $pdo): array
{
    $query = $pdo->prepare('SELECT `shows`.`name`, `genres`.`name` AS `genre`, `release year`, `image`, `alt` FROM `shows` INNER JOIN `genres` ON `shows`.`genre` = `genres`.`id`;');

    $query->execute();

    $items = $query->fetchALL();

    return $items;
}

function insertItem(PDO $pdo, array $newitem): int
{
    $insert = $pdo->prepare('INSERT INTO `shows` (`genre`, `name`, `release year`, `image`, `alt`) VALUES (:genre, :name, :releaseYear, :image, :alt)');
    $insert->bindParam(':genre',$newitem['genre']);
    $insert->bindParam(':name', $newitem['name']);
    $insert->bindParam(':releaseYear',$newitem['releaseYear']);
    $insert->bindParam(':image', $newitem['image']);
    $insert->bindParam(':alt',$newitem['alt']);
    $insert->execute();

    return $pdo->lastInsertId();
}
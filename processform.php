<?php

require_once 'database.php';


$newitem = array('genre' => $_POST['gname'],
    'name' => $_POST['sname'],
    'releaseYear' => $_POST['ryear'],
    'image' => $_POST['cover'],
    'alt' => $_POST['message']);

function insertFunction(array $newitem): void
{
    global $pdo;
    $itemid = insertItem($pdo, $newitem);
    header('Location: index.php');

}

function validateForm(array $newitem): bool
{

    $releaseYear = filter_var($newitem['releaseYear'], FILTER_SANITIZE_NUMBER_INT);

    if (filter_var($releaseYear, FILTER_VALIDATE_INT)) {
        insertFunction($newitem);
        return true;
    } else {
        echo("$releaseYear is not a valid date");
        return false;
    }
}

if (validateForm($newitem)) {
    insertFunction($newitem);
}
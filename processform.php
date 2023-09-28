<?php

require_once 'database.php';

$newitem = array ('genre'=>$_POST['gname'],
    'name'=>$_POST['sname'],
    'releaseYear'=>$_POST['ryear'],
    'image'=>$_POST['cover'],
    'alt'=>$_POST['message']);

$itemid =insertItem($pdo, $newitem);

header('Location: index.php');
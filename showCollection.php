<?php

function showCollection($items)
{

    $html = "";
    foreach ($items as $item) {
        $html = $html . '<div class="container">'
            . '<div style="background-image: url(' . $item['image'] . ')" class="item1" title="' . $item['alt'] . '"></div>'
            . '<p>' . $item['name'] . '</p>'
            . '<p>' . $item['genre'] . '</p>'
            . '<p>' . $item['release year'] . '</p>'
            . '</div> ';
    }

    return $html;
}
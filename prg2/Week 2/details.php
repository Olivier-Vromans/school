<?php
include 'music.php';
$album_id = array ($_GET["album_id"]);
// turn $_GET in a value that can be used to read the right data
foreach ($album_id as $key => $value) {
    echo $albums["artist"][$value] . "</br>";
    echo $albums["albumName"][$value] . "</br>";
    echo $albums["releaseYear"][$value] . "</br>";
    echo $albums["tracks"][$value] . "</br>";
    echo $albums["genre"][$value] . "</br>";
}
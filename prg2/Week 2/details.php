<?php
include 'opdracht 2.1.php';

// turn $_GET in a value that can be used to read the right data
foreach ($_GET as $key => $value) {
    echo $albums["artist"][$value] . "</br>";
    echo $albums["albumName"][$value] . "</br>";
    echo $albums["releaseYear"][$value] . "</br>";
    echo $albums["tracks"][$value] . "</br>";
    echo $albums["genre"][$value] . "</br>";
}
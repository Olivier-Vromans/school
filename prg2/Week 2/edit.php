<?php
include 'music.php';
$album_id = array ($_GET["album_id"]);
// turn $_GET in a value that can be used to read the right data
// foreach ($album_id as $key => $value) {
//     echo $albums["artist"][$value] . "</br>";
//     echo $albums["albumName"][$value] . "</br>";
//     echo $albums["releaseYear"][$value] . "</br>";
//     echo $albums["tracks"][$value] . "</br>";
//     echo $albums["genre"][$value] . "</br>";
// }
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <h2 class="thead"> Vull het form in om een album te wijzigen.</h2>
        <form>
            <? foreach ($album_id as $key => $value) { ?>
            Artist: <input type="text" name="artist" required value="<? echo $albums["artist"][$value];?>"> <br>
            Album:  <input type="text" name="albumName"required value="<? echo $albums["albumName"][$value];?>"><br>
            Release date: <input type="number" min="0" max="99999" name="releaseYear" required value="<? echo $albums["releaseYear"][$value];?>"><br>
            Tracks: <input type="text" name="tracks" required value="<? echo $albums["tracks"][$value];?>" require="tracks"><br>
            Genre: <input type="text" name="genre" required value="<? echo $albums["genre"][$value];?>"><br>
            <input type="submit" value="Submit">
            <? } ?>
        </form>
    </body>
</html>
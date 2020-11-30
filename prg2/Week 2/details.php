<?php
require_once 'musicalbums.php';
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
    <table>
    <? foreach ($album_id as $key => $value) { ?>
        <thead>
            <th class="thead"> <? echo $albums["artist"][$value], " - ", $albums["albumName"][$value]; ?> </h2> </th>
        </thead>
        <tbody>
            <tr>
                <td> <p class="tddeatails"> Het album <? echo $albums["albumName"][$value]; ?> van <? echo $albums["artist"][$value]; ?>
                kwam uit in <? echo $albums["releaseYear"][$value]; ?>, het album bestaat uit 
                <? echo $albums["tracks"][$value]; ?> die onder het genre <? echo $albums["genre"][$value]; ?> vallen. </p> </td>
            <tr>
        </tbody>
    <? } ?>
    </table>
</html>
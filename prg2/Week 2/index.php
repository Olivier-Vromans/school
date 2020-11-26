<?php
include 'music.php';
?>
<!doctype html>
<html lang="en">
<!-- style.css part -->
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<!--table for music albums -->
</head>
<table>
    <thead>
        <tr>
            <!-- head -->
            <th  colspan="7">Music Albums</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <!-- subheads-->
            <th>#</th>
            <th>Name Artist</th>
            <th>Name Album</th>
            <th>Release Year</th>
            <th>Total Tracks</th>
            <th>Genre</th>
            <th>Details</th>
            <th>Edit</th>
        </tr>
        <!-- loop for the albums -->
        <?php for ($i = 0; $i < count($albums["artist"]); $i++) {?>
            <tr>
                <td> <? echo $i + 1; ?> </td>
                <td> <? echo $albums["artist"][$i]; ?> </td>
                <td> <? echo $albums["albumName"][$i]; ?> </td>
                <td> <? echo $albums["releaseYear"][$i]; ?> </td>
                <td> <? echo $albums["tracks"][$i]; ?> </td>
                <td> <? echo $albums["genre"][$i]; ?> </td>
                <td> <td><a href="details.php?album_id=<?= $i ?>">Detail</a></td>
                <td>  </td>
            </tr>
        <? } ?>
    </tbody>
</table>
<br>
</html>
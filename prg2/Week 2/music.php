<?php
include 'musicalbums.php';
?>
<!doctype html>
<html lang="en">
<!-- style.css part -->
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<!--table for music albums -->
</head>
<a href="create.php">klik hier om een album toe te voegen</span></a>
<table>
    <thead>
        <tr>
            <!-- head -->
            <th class="th" colspan="8">Music Albums</th>
        </tr>
    </thead>
    <tbody>
        <tr class="tr">
            <!-- subheads-->
            <th class="th">#</th>
            <th class="th">Name Artist</th>
            <th class="th">Name Album</th>
            <th class="th">Release Year</th>
            <th class="th">Total Tracks</th>
            <th class="th">Genre</th>
            <th class="th">Details</th>
            <th class="th">Edit</th>
        </tr>
        <!-- loop for the albums -->
        <?php for ($i = 0; $i < count($albums["artist"]); $i++) {?>
            <tr class="tr">
                <td class="td"> <? echo $i + 1; ?> </td>
                <td class="td"> <? echo $albums["artist"][$i]; ?> </td>
                <td class="td"> <? echo $albums["albumName"][$i]; ?> </td>
                <td class="td"> <? echo $albums["releaseYear"][$i]; ?> </td>
                <td class="td"> <? echo $albums["tracks"][$i]; ?> </td>
                <td class="td"> <? echo $albums["genre"][$i]; ?> </td>
                <td class="td"> <a href="details.php?album_id=<?= $i ?>">Detail</a></td>
                <td class="td"> <a href="edit.php?album_id=<?= $i ?>">Edit</a></td>
            </tr>
        <? } ?>
    </tbody>
</table>
<br>
</html>
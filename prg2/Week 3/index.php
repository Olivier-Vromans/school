<?php
//Require music data to use the db variable in this file
require_once 'includes/db_connection.php';
$conn = openCon(); //making connection to the database


//Get the result set from the database with a SQL query
$result = mysqli_query($conn, "SELECT id, artist, album, genre, year, tracks, cover FROM musicAlbums")
or die(mysqli_error());

//Loop through the result to create a custom array
$albums=[];
while($row = mysqli_fetch_assoc(MYSQLI_ASSOC)){
    $albums []= 
        [
        'id' => $row['id'],
        'artist' => $row['artist'],
        'album' => $row['album'],
        'genre' => $row['genre'],
        'year' => $row['year'],
        'tracks' => $row['tracks'],
        'cover' => $row['cover']
        ];
}
// print_r($albums);

//Close connection
$conn->close();

?>
<!doctype html>
<html lang="en">
<head>
    <title>Music Collection</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<h1>Music Collection</h1>
<a href="index-alternative.php">Check alternative view</a>
<table>
    <thead>
    <tr>
        <th></th>
        <th>#</th>
        <th>Artist</th>
        <th>Album</th>
        <th>Genre</th>
        <th>Year</th>
        <th>Tracks</th>
        <th colspan="2"></th>
    </tr>
    </thead>
    <tfoot>
    <tr>
        <td colspan="9">&copy; My Collection</td>
    </tr>
    </tfoot>
    <tbody>
    <?php foreach ($albums as $index => $album) { ?>
        <tr>
            <td class="image"><img src="media/<? echo $album['cover'];?>" alt="cover"/></td>
            <td><?= $album['id'] ?></td>
            <td><?= $album['artist'] ?></td>
            <td><?= $album['album'] ?></td>
            <td><?= $album['genre'] ?></td>
            <td><?= $album['year'] ?></td>
            <td><?= $album['tracks'] ?></td>
            <td><a href="detail.php?index=<?= $index ?>">Details</a></td>
        </tr>
    <?php }; ?>
    </tbody>
</table>
</body>
</html>
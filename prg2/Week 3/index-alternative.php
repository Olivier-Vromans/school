<?php
//Require music data to use the db variable in this file
require_once 'includes/db_connection.php';
$conn = openCon(); //making connection to the database


//Get the result set from the database with a SQL query
$result = mysqli_query($conn, "SELECT id, artist, album, genre, year, tracks, cover FROM musicAlbums")
or die(mysqli_error());

//Loop through the result to create a custom array
$albums=array();
while($row = $result->fetch_array(MYSQLI_ASSOC)){
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
    <link rel="stylesheet" type="text/css" href="css/alternative.css"/>
</head>
<body>
    <main>
        <h1>Music collection full of awesomeness!</h1>

        <nav>
            <a href="index.php">Check default view</a>
        </nav>

        <div class="albums">
            <?php foreach ($albums as $index => $album) { ?>
                <tr>
                    <album>
                        <div class="cover">
                            <a  href="detail.php?index=<?= $index ?>">
                            <img src="media/<? echo $album['cover'];?>" alt="cover"/>
                            </a>
                        </div>
                        <div class="links">
                            <a class="detail" href="detail.php?index=<?= $index ?>"><? echo $album['artist'] ." - " . $album['album'];?></a>
                        </div>
                    </album>
            <?php } ?>
        </div>
    </main>
</body>
</html>

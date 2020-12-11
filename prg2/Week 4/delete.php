<?php
//TODO: create delete logic
//Require database in this file
require_once "includes/database.php";
/** @var $db */

//Retrieve the GET parameter from the 'Super global'
$albumId = $_GET['id'];

//Get the record from the database result
$query = "SELECT * FROM albums WHERE id = '" . mysqli_escape_string($db, $albumId) . "'";
$result = mysqli_query($db, $query);
$album = mysqli_fetch_assoc($result);

//locate the record from the database
$deleteAlbum = "DELETE FROM albums WHERE id = $albumId";
// path to cover
$tempPath = "images/";
$path = $tempPath . $album['image'];
//echo $path;

if(isset($_POST['Delete'])){
    $deleteResult = mysqli_query($db, $deleteAlbum);
    unlink($path);
    header("location:index.php"); //redirects to index page
    exit;
}

//Close connection
mysqli_close($db);

?>
<!doctype html>
<html lang="en">
<head>
    <title>Music Collection Details</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<h1>Delete "<?= $album['artist'] . ' - ' . $album['name']; ?>"</h1>
<ul>
    <li>Genre: <?= $album['genre']; ?></li>
    <li>Year: <?= $album['year']; ?></li>
    <li>Tracks: <?= $album['tracks']; ?></li>
</ul>
<div>
    <img src="images/<?= $album['image']; ?>" alt=""/>
</div>
<div>
    <form method="post">
        <input type="submit" name="Delete" value="Delete"/>
    </form>
    <a href="index.php">Go back to the list</a>
</div>
</body>
</html>

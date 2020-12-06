<?php
//Require music data to use the db variable in this file
require_once 'includes/db_connection.php';
$conn = openCon(); //making connection to the database

// IF index is not present in url or value is empty
if(!isset($_GET['index']) || $_GET['index'] == '')
{
    // redirect to index.php
    header('Location: index.php');
}
// Get the id from the url
$index = $_GET['index'];

// create a query to select the album from the database
// execute the query on the db
$result = mysqli_query($conn, "SELECT artist, album, genre, year, tracks, cover FROM musicAlbums WHERE id = $index + 1")
or die(mysqli_error());

// If all goes well, the db returns a table result with 1 row
// Fetch the row
//echo "Returned rows are: " . mysqli_num_rows($result) . "<br>";

$albums=array();
while($row = $result->fetch_row()){
    $albums =  
        [$row[0], $row[1], $row[2], $row[3], $row[4], $row[5]];
}
//show array
// print_r($albums);

// Close the db connection
$conn->close();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <section>
    <h1>Music Collection Details</h1>
    <h3> Details of <? echo $albums[0] . " - " . $albums[1];?> </h3>
    <li> Genre: <? echo $albums[2]; ?> </li>
    <li> Release Year: <? echo $albums[3]; ?> </li>
    <li> Tracks on the album: <? echo $albums[4]; ?> </li>
    <img class="cover" src="media/<? echo $albums[5];?>" style="width: 200px;
    height: 200px;"></section>
</body>
</html>
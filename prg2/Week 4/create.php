<?php
//Require music data to use variable in this file
require_once "includes/database.php";
/** @var $db */


//Check if Post isset, else do nothing
if (isset($_POST['submit'])) {
    //Postback with the data showed to the user, first retrieve data from 'Super global'
    $artist = $_POST['artist'];
    $album = $_POST['album'];
    $genre = $_POST['genre'];
    $year = $_POST['year'];
    $tracks = $_POST['tracks'];
    $image = $_FILES['image']['name'];
    //Secure the data above

    //Check if data is valid & generate error if not so
    $errors = [];
    if ($artist == "") {
        $errors[] = 'Artist cannot be empty';
    }
    if ($album == "") {
        $errors[] = 'Album cannot be empty';
    }
    if ($genre == "") {
        $errors[] = 'Genre cannot be empty';
    }
    if ($year == "") {
        $errors[] = 'Year cannot be empty';
    }
    if (!is_numeric($year) || strlen($year) != 4) {
        $errors[] = 'Year needs to be a number with the length of 4';
    }
    if ($tracks == "") {
        $errors[] = 'Tracks cannot be empty';
    }
    if (!is_numeric($tracks)) {
        $errors[] = 'Tracks need to be a number';
    }
    if (!empty($artist) && !empty($album) && !empty($genre) && !empty($year) && !empty($tracks)) {
        //TODO: Store in database after there are 0 errors
        $insert = "INSERT INTO albums(artist, name, genre, year, tracks, image) 
        VALUES ('$artist','$album','$genre','$year','$tracks', '$image')";
        if($insertResult = mysqli_query($db, $insert)){
        move_uploaded_file($_FILES['image']['tmp_name'], "images/$image");
        echo "Image Successfully Uploaded";
        } else {
        echo "Something went wrong";
        }
        if (!$insertResult) {
            die('Could not insert data: ' . $db->error);
        } else {
            header("location:index.php"); //redirects to index page
            exit;
        }

    }
}

//Close connection
mysqli_close($db);
?>
<!doctype html>
<html lang="en">
<head>
    <title>Music Collection Create</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<h1>Create album</h1>
<?php if (isset($errors)) { ?>
    <ul class="errors">
        <?php foreach ($errors as $error) { ?>
            <li><?= $error; ?></li>
        <?php } ?>
    </ul>
<?php } ?>

<form action="<?= $_SERVER['REQUEST_URI']; ?>" method="post" enctype="multipart/form-data">
    <div class="data-field">
        <label for="artist">Artist</label>
        <input id="artist" type="text" name="artist" value="<?= (isset($artist) ? $artist : ''); ?>"/>
        <span><?= (isset($errors['artist']) ? $errors['artist'] : '') ?></span>
    </div>
    <div class="data-field">
        <label for="album">Album</label>
        <input id="album" type="text" name="album" value="<?= (isset($album) ? $album : ''); ?>"/>
    </div>
    <div class="data-field">
        <label for="genre">Genre</label>
        <input id="genre" type="text" name="genre" value="<?= (isset($genre) ? $genre : ''); ?>"/>
    </div>
    <div class="data-field">
        <label for="year">Year</label>
        <input id="year" type="text" name="year" value="<?= (isset($year) ? $year : ''); ?>"/>
    </div>
    <div class="data-field">
        <label for="tracks">Tracks</label>
        <input id="tracks" type="number" name="tracks" value="<?= (isset($tracks) ? $tracks : ''); ?>"/>
    </div>
    <div class="data-submit">
        <label for="file">Upload Cover</label>
        <input type="file" name="image"/>
    </div>
    <div class="data-submit">
        <input type="submit" name="submit" value="Save"/>
    </div>
</form>
<br>
<div>
    <a href="index.php">Go back to the list</a>
</div>
</body>
</html>
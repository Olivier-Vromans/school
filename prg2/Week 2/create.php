<?php
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <h2 class="thead"> Vull het form in om een album toe te voegen.</h2>
        <form>
            Artist: <input type="text" name="artist" required><br>
            Album:  <input type="text" name="Album"required><br>
            Release date: <input type="number" min="0000" max="99999" name="releaseYear" required><br>
            Tracks: <input type="text" name="tracks" required><br>
            Genre: <input type="text" name="genre" required><br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>

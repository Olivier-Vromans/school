<?php
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <h2 class="thead"> Vull het form in om een album toe te voegen.</h2>
        <form>
            Artist: <input type="text" name="artist" required="" oninvalid="this.setCustomValidity('Type artist name')" oninput="setCustomValidity('')"><br>
            Album:  <input type="text" name="Album"required oninvalid="this.setCustomValidity('Type album name')" oninput="setCustomValidity('')"><br>
            Release date: <input type="number" min="0000" max="99999" name="releaseYear" required="" oninvalid="this.setCustomValidity('Type release year')" oninput="setCustomValidity('')"><br>
            Tracks: <input type="text" name="tracks" required="" oninvalid="this.setCustomValidity('Type how many tracks are on the album')" oninput="setCustomValidity('')"><br>
            Genre: <input type="text" name="genre" required=""  oninvalid="this.setCustomValidity('Type the genre')" oninput="setCustomValidity('')"><br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>

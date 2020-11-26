
<?php
// opdracht 1.1
echo "<b>Opdracht 1.1 datum en tijd</b>" . "</br>";
//default timezone
date_default_timezone_set('Europe/Amsterdam');
//variable for date and time
$datefull = date('d F Y');
$datashort = date('d/m/Y');
$timehour = date('G');
$timeminutes = date('i');
if (date('i') == '01'){
    $minutestring = ' minuut.';
} else {
    $minutestring= ' minuten.';
}

//output from data and time
echo ("Het is vandaag $datefull") . "</br>";
echo ("Het is vandaag $datashort") . "</br>";
echo ("het is nu $timehour uur en $timeminutes $minutestring") . "</br>";
echo "<br>";

//opdracht 1.2
echo "<b>Opdracht 1.2 begroeten met dagdelen</b>" . "</br>";
//if statements to separate the half-days by time
if (6 <= $timehour && $timehour < 12 )
    echo "Goedenmorgen welkom op mijn website";
else if (12 <= $timehour && $timehour < 18)
    echo "Goedemiddig welkom op mijn website";
else if (18 <= $timehour && $timehour <= 23)
    echo "Goedenavond welkom op mijn website";
else if (0 <= $timehour && $timehour < 6)
    echo "Goedenacht welkom op mijn website";
echo "<br> <br>";

//opdracht 1.3
echo "<b>Opdracht 1.3 muziek albums</b>" . "</br>";
// array for the ten albums
$albums=array (
    "artist" => array("Linkin Park","Bring Me The Horizon", "Starset", "Thirty Seconds to Mars", "Icon For hire", "NF", "Eminem", "Movements", "Neffex", "Headhunterz"),
    "albumName"=> array("Hybrid Theory (Bonus Edition)","Sempiternal (Expended Edition)", "Divisions", "A Beautiful Lie", "You Can't Kill Us", "Mansion", "Recovery", "Feel Something", "Fight Back The Collection", "The Return of Headhunterz"),
    "releaseYear"=> array(2000,2013,2019,2005,2016,2015,2010,2017,2018,2018),
    "tracks"=> array("14 tracks","13 tracks", "13 tracks", "14 tracks", "13 tracks", "12 Tracks", "16 Tracks", "11 Tracks", "8 Tracks", "11 Tracks"),
    "genre"=> array("Alternitve Rock","Alternitve Rock", "Electronic Rock", "Alternitve Rock", "Alternitve Rock", "Christian Hip Hop", "Rap", "Emo", "Electronic Dance", "Hardstyle"),
    );
?>
<!-- making the document read html -->
<!doctype html>
<html lang="en">
<!-- style.css part -->
<style type="text/css">
     /* style for the heading */
    th {
        font-family: Arial, Helvetica, sans-serif;
        font-size: .7em;
        background: #666666;
        color: #FFF;
        padding: 2px 6px;
        border-collapse: separate;
        text-align: center;
        vertical-align: middle;
    }
    td {
        font-family: Arial, Helvetica, sans-serif;
        font-size: .7em;
        vertical-align: middle;
        padding: 10px;
    }
    /* style for the album with different colors for even and odd */
    tr:nth-child(even) {
        background: white;
        color: black;
    }
    tr:nth-child(odd){
        background: darkgray;
        color: white;
    }
</style>
<!--table for music albums -->
<table>
    <thead>
        <tr>
            <!-- head -->
            <th  colspan="6">Music Albums</th>
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
            </tr>
        <? } ?>
    </tbody>
</table>
<br>
</html>
<!-- making the document php again -->
<?php

// opdracht 1.4
echo "<b>Opdracht 1.4 sterrenbeeld</b>" . "</br>";

function getstarsign($day, $month){
    if (( $day>=22 && $month==12)||($day<=19 && $month==1)){
        $mysign = "Steenbok";
    }
    if (($day>=20 && $month==1) || ($day<=19 && $month==2)){
        $mysign = "Waterman";
    }
    if (($day>=20 &&$month==2 ) || ($day<=20 &&$month==3 )){
        $mysign = "Vissen";
    }
    if (($day>=21 &&$month==3 ) || ($day<=20 &&$month==4 )) {
        $mysign = "Ram";
    }
    if (($day>=21 &&$month==4 ) || ($day<=20 &&$month==5 )){
        $mysign = "Stier";
    }
    if (($day>=21 &&$month==5 ) || ($day<=21 &&$month==6 )){
        $mysign = "Tweeling";
    }
    if (($day>=22 &&$month==6 ) || ($day<=22 &&$month==7 )){
        $mysign = "Kreeft";
    }
    if (($day>=23 &&$month==7 ) || ($day<=23 &&$month==8 )){
        $mysign = "Leeuw";
    }
    if (($day>=24 &&$month==8 ) || ($day<=23 &&$month==9 )){
        $mysign = "Maagd";
    }
    if (($day>=24 &&$month==9 ) || ($day<=23 &&$month==10 )){
        $mysign = "Weegschaal";
    }
    if (($day>=24 &&$month==10 ) || ($day<=22 &&$month==11 )){
        $mysign = "Schorpioen";
    }
    if (($day>=23 &&$month==11 ) || ($day<=21 &&$month==12 )){
        $mysign = "Boogschutter";
    }
    return $mysign;
}
echo "Jouw sterrenbeeld is " . getstarsign(17,4);

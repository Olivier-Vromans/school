<?php
//making the connection db so you don't have to change every file only this one
$host = "localhost";
$database = "music_collection";
$user = "root";
$password = "";

$db = mysqli_connect($host, $user, $password, $database)
or die("Error: " . mysqli_connect_error());;
?>
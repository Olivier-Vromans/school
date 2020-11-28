<?php
date_default_timezone_set('Europe/Amsterdam');
function timeInBetween() {
    $datetime1 = date('05-02-2020');
    $datetime2 = date("12-08-2020");

    $difference = abs(strtotime($datetime2) - strtotime($datetime1));
    
    $years = floor($difference / (365*60*60*24));
    $months = floor(($difference - $years * 365*60*60*24) / (30*60*60*24));
    $days = floor(($difference - $years * 365*60*60*24 - $months * 30*60*60*24) / (60*60*24));
    printf("Het verschil tussen 5 februari en 12 augustus is %d maanden en %d dagen.\n", $months, $days);
}
function timeToBirthday() {
    $datetime1 = date("d-m-Y");
    $datetime2 = date("17-04-Y", strtotime("+365 days"));
    
    $difference = abs(strtotime($datetime2) - strtotime($datetime1));
    
    $years = floor($difference / (365*60*60*24));
    $months = floor(($difference - $years * 365*60*60*24) / (30*60*60*24));
    $days = floor(($difference - $years * 365*60*60*24 - $months * 30*60*60*24) / (60*60*24));
    printf("Het is nog %d maanden en %d dagen tot mijn verjaardag.\n", $months, $days);

}
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Programmeren 2 - Week 2 - Opdracht 2.4</title>
    </head>
    <body>
        <h1>Opdracht 2.4 - Datum en tijd</h1>
        <hr/>
        <h2>Toon de datum van vandaag in een webpagina met het format "31-12-19 10:00"</h2>
            <p>
                <? echo "De datum en tijd van vandaag is " . date('d-m-y H:i');?>
            </p>
        <h2>Toon de datum als hierboven, maar dan 1 week eerder</h2>
             <p>
                <? echo "De datum en tijd van vorige week was " . date("d-m-y H:i", strtotime("-7 days")); ?>
            </p>
        <h2>Toon het verschil in dagen tussen 5 februari en 12 augustus</h2>
            <p> <? echo timeInBetween(); ?>
            </p>
        <h2>Toon het aantal nachten slapen tot je volgende verjaardag</h2>
            <p>
                <? echo timeToBirthday();?>
            </p>
    </body>
</html>
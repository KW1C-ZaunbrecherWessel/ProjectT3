<?php
/**
 * User: Stef Tax
 * Date: 27-03-23
 * File: Dit is om de tijd te laten zien
 */
?>

<?php
//    set time to Amsterdam
    date_default_timezone_set('Europe/Amsterdam');
//    current time
    $tijd = date('H:i');
//    current date
    $datum = date('d-m-Y');
// determine what time of day it is
// check if the time is between 06:00 and 12:00
    if ($tijd >= "06:00" && $tijd < "12:00")
    {
        $greeting = "Goedemorgen";
    }
//    check if the time is between 12:00 and 18:00
    elseif ($tijd >= "12:00" && $tijd < "18:00")
    {
        $greeting = "Goedemiddag";
    }
//    if its not morning or moon, its evening
    else
    {
        $greeting = "Goedeavond";
    }

// show message
    echo $greeting . ", het is nu " . $tijd . "<br>" . $datum;

?>



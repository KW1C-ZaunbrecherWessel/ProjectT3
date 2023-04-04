<?php
// Auteur: Stef Tax
// Datum: 31-03-23
// Omschrijving: Dit is de cookie om de gegevens van de vragenlijst op te slaan

//coockie expires in: 14 days
$expires = time() + 3600 * 24 * 14;
//place cookie
setcookie("naamOpslaan", $vraag13, $expires, "/");

////
//if(isset($_COOKIE["naamOpslaan"]))
//{
//    $opgeslagenNaam = $_COOKIE['naamOpslaan'] =
//}
////cookie aanmaken als deze nog niet bestaat
//else
//{
//   setcookie('naamOpslaan', 0, time($expires), "/");
//}



?>


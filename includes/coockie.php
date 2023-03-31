<?php
// Auteur: Stef Tax
// Datum: 31-03-23
// Omschrijving: Dit is de coockie om de gegevens van de vragenlijst op te slaan

//coockie expires in: 14 days
$expires = time() + 3600 * 24 * 14;
//place coockie
setcookie("dataOpslaan", "bla" , $expires);
?>
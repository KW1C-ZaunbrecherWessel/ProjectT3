<?php
// Auteur: Stef Tax
// Datum: 31-03-23
// Omschrijving: Dit is de cookie om de gegevens van de vragenlijst op te slaan


//                making sure page is empty
//error_reporting(0);
//                question 1
$vraag1 = $_POST['vraag1'];
//                question 2
$vraag2 = $_POST['vraag2'];
//                question 3
$vraag3 = $_POST['vraag3'];
//                question 4
$vraag4 = $_POST['vraag4'];
//                question 5
$vraag5 = $_POST['vraag5'];
//                question 6
$vraag6 = $_POST['vraag6'];
//                question 7
$vraag7 = $_POST['vraag7'];
//                question 8
$vraag8 = $_POST['vraag8'];
//                question 9
$vraag9 = $_POST['vraag9'];
//                question 10
$vraag10 = $_POST['vraag10'];
//                question 11
$vraag11= $_POST['vraag11'];
//                question 12
$vraag12 = $_POST['vraag12'];
//                    questions for name, email and age
//                name
$vraag13 = $_POST['vraag13'];
//                email
$vraag14 = $_POST['vraag14'];
//                age
$vraag15 = $_POST['vraag15'];
// to make sure array can be put in cookie
$antwoorden = serialize(array($_POST['vraag1'], $_POST['vraag2'], $_POST['vraag3'], $_POST['vraag4'], $_POST['vraag5'], $_POST['vraag6'], $_POST['vraag7'], $_POST['vraag8'], $_POST['vraag9'], $_POST['vraag10'], $_POST['vraag11'], $_POST['vraag12']));
//       count everything up to calculate the score
$allevragen = $vraag1 + $vraag2 + $vraag3 + $vraag4 + $vraag5 + $vraag6 + $vraag7 + $vraag8 + $vraag9 + $vraag10 + $vraag11 + $vraag12;
//coockie expires in: 14 days
$expires = time() + 3600 * 24 * 14;
//place cookie for result
setcookie("resultaatOpslaan", $allevragen, $expires, "/");
//place cookie for name
//var_dump($antwoorden); die();
setcookie("naamOpslaan", $vraag13, $expires, "/");
//place cookie for array points
setcookie("puntenOpslaan", $antwoorden, $expires, "/");
// put array inside cookie
if (isset($_COOKIE['puntenOpslaan'])==true)
{
    // Haal de waarde van de cookie op
    $_COOKIE['puntenOpslaan'] = $antwoorden;
}
else
{
    echo "De 'puntenOpslaan' cookie is niet ingesteld.";
}
// put score variable inside cookie
if (isset($_COOKIE['resultaatOpslaan'])==true)
{
    // Haal de waarde van de cookie op
    $_COOKIE['resultaatOpslaan'] = $allevragen;
}
else
    {
    echo "De 'resultaatOpslaan' cookie is niet ingesteld.";
    }
// put name variable in cookie
if (isset($_COOKIE['naamOpslaan'])==true)
{
    // Haal de waarde van de cookie op
    $_COOKIE['naamOpslaan'] = $vraag13;
}
else
{
    echo "De 'resultaatOpslaan' cookie is niet ingesteld.";
}
//redirect to results page
header("location: results.php");
?>



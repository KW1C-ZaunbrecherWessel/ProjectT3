<?php
/*
Auteur: Stef Tax
Datum: 21-03-23
Omschrijving: Dit is de resultaten pagina van de form
*/
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./styles/stylesheet.css">
        <title>
            Mc Donald's Burgerquiz
        </title>
    </head>
    <?php
    //include header and nav
        require_once "includes/header.php"
    ?>

    <body>
        <main>
            <article>
                <?php
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

//                    cookie opslaan
                require_once 'includes/coockie.php';
//                    Create if else statements to determine which burger fits best by points
                $allevragen = $vraag1 + $vraag2 + $vraag3 + $vraag4 + $vraag5 + $vraag6 + $vraag7 + $vraag8 + $vraag9 + $vraag10 + $vraag11 + $vraag12;

//                display name time and date
                echo "Bedankt voor het invullen van de vragenlijst " . $vraag14 . "!";
                require_once "includes/tijd.php";
                if ($allevragen <= 100)
                {
                    echo "De Mc Plant past het beste bij jou<br>" . "Je punten aantal was " . $allevragen . "punten" . "<br>" . "<a href='https://www.mcdonalds.com/nl/nl-nl/product/McPlant.html#accordion-7b89f50203-item-9dc886373b'> klik hier voor meer informatie.</a>" . "<br>" . "<img src='images/McPlant.jpg' alt='Hier hoort een Mc Plant te staan'>";
                }
                else if ($allevragen <= 200)
                {
                    echo "De Big Mac past het beste bij jou<br>" . "Je punten aantal was " . $allevragen . "punten" . "<br>" . "<a href='https://www.mcdonalds.com/nl/nl-nl/product/big-mac.html#accordion-7b89f50203-item-9dc886373b'> klik hier voor meer informatie</a>" . "<br>" . "<img src='images/BigMac.jpg' alt='Hier hoort een Big Mac te staan'>";
                }
                else if ($allevragen <= 300)
                {
                    echo "De Quarter Pounder past het beste bij jou<br>" . "Je punten aantal was " . $allevragen . "punten" . "<br>" . "<a href='https://www.mcdonalds.com/nl/nl-nl/product/quarter-pounder.html#accordion-7b89f50203-item-9dc886373b'> klik hier voor meer informatie</a>" . "<br>" . "<img src='images/QuarterPounder.jpg' alt='Hier hoort een Quarter Pounder te staan'>";
                }
                else
                {
                    echo "De Mc Chicken past het beste bij jou<br>" . "Je punten aantal was " . $allevragen . "punten" . "<br>" . "<a href='https://www.mcdonalds.com/nl/nl-nl/product/mcchicken.html#accordion-7b89f50203-item-9dc886373b'> klik hier voor meer informatie</a>" . "<br>" . "<img src='images/McChicken.jpg' alt='Hier hoort een Mc Chicken te staan'>";
                }
                ?>

            </article>
        </main>
        <!--footer-->
        <?php
        require_once "includes/footer.php";
        ?>
</body>

</html>

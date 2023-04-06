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





//                display name time and date
                echo "Bedankt voor het invullen van de vragenlijst " . $_COOKIE['naamOpslaan'] . "!" . " ";
                require_once "includes/tijd.php";
                if ($_COOKIE['resultaatOpslaan'] <= 0)
                {
                    echo "Je hebt de vragelijst al eerder ingevuld het resultaat was " . $_COOKIE["resultaatOpslaan"];
                }
                else if ($_COOKIE['resultaatOpslaan'] <= 100)
                {
                    echo "De Mc Plant past het beste bij jou<br>" . "Je punten aantal was " . $_COOKIE['resultaatOpslaan'] . "punten" . "<br>" . "<a href='https://www.mcdonalds.com/nl/nl-nl/product/McPlant.html#accordion-7b89f50203-item-9dc886373b'> klik hier voor meer informatie.</a>" . "<br>" . "<img src='images/McPlant.jpg' alt='Hier hoort een Mc Plant te staan'>";
                }
                else if ($_COOKIE['resultaatOpslaan'] <= 200)
                {
                    echo "De Big Mac past het beste bij jou<br>" . "Je punten aantal was " . $_COOKIE['resultaatOpslaan'] . "punten" . "<br>" . "<a href='https://www.mcdonalds.com/nl/nl-nl/product/big-mac.html#accordion-7b89f50203-item-9dc886373b'> klik hier voor meer informatie</a>" . "<br>" . "<img src='images/BigMac.jpg' alt='Hier hoort een Big Mac te staan'>";
                }
                else if ($_COOKIE['resultaatOpslaan'] <= 300)
                {
                    echo "De Quarter Pounder past het beste bij jou<br>" . "Je punten aantal was " . $_COOKIE['resultaatOpslaan'] . "punten" . "<br>" . "<a href='https://www.mcdonalds.com/nl/nl-nl/product/quarter-pounder.html#accordion-7b89f50203-item-9dc886373b'> klik hier voor meer informatie</a>" . "<br>" . "<img src='images/QuarterPounder.jpg' alt='Hier hoort een Quarter Pounder te staan'>";
                }
                else if ($_COOKIE['resultaatOpslaan'] >= 300)
                {
                    echo "De Mc Chicken past het beste bij jou<br>" . "Je punten aantal was " . $_COOKIE['resultaatOpslaan'] . "punten" . "<br>" . "<a href='https://www.mcdonalds.com/nl/nl-nl/product/mcchicken.html#accordion-7b89f50203-item-9dc886373b'> klik hier voor meer informatie</a>" . "<br>" . "<img src='images/McChicken.jpg' alt='Hier hoort een Mc Chicken te staan'>";
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

<?php
/*
 * auteur:         wessel zaunbrecher
 * aanmaakdatum:   21-3-2023
 * omschrijving:   ProjectT3
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/stylesheet.css">
    <title>
        McDonald's Nederland: Burgers, Franse Friet en veel meer!
    </title>
</head>
<body>
<?php
include "includes/header.php";
?>
    <main>
        <article>
            <figure>
                <img id="happymeal" src="images/happymeal.png" alt="happy meal">
            </figure>
        </article>
        <article class="grid-container-three">
            <figure class="grid-item-three">
                <img src="images/mcapp.jpg" alt="mc app">
                <figcaption>
                    <h3>
                        MyMcDonald's App
                    </h3>
                    <p>
                        Met de MyMcDonald's App spaar je voor gratis favorieten, geniet je van fun, handige tools en persoonlijke Deals!
                    </p>
                </figcaption>
            </figure>
            <figure class="grid-item-three">
                <img src="images/mccafe.jpg" alt="mc cafe">
                <figcaption>
                    <h3>
                        Even you-time?
                    </h3>
                    <p>
                        Er is altijd een McCafé in de buurt. Daar kun je elk moment van de dag terecht voor je favoriete koffie en lekkers.
                    </p>
                </figcaption>
            </figure>
            <figure class="grid-item-three">
                <img src="images/mcdelivery.jpg" alt="mc delivers">
                <figcaption>
                    <h3>
                        Geen zorgen, we bezorgen
                    </h3>
                    <p>
                        Je hoeft de deur niet meer uit om te genieten van onze producten. Laat ze bezorgen met McDelivery.
                    </p>
                </figcaption>
            </figure>
        </article>
        <article class="grid-container-two">
            <figure class="grid-item-two">
                <img src="images/mccrew.jpg" alt="mc crew">
                <figcaption>
                    <h3>
                        Vind de allerleukste (bij)baan!
                    </h3>
                    <p>
                        Wil je ook werken met de leukste Crew? Start bij McDonald's en solliciteer direct.
                    </p>
                </figcaption>
            </figure>
            <figure class="grid-item-two">
                <img class="double" src="images/mcfuture.jpg" alt="mc future">
                <figcaption>
                    <h3>
                        Een gouden investering in je toekomst!
                    </h3>
                    <p>
                        McDonald’s Academy biedt medewerkers veel verschillende mogelijkheden om te blijven leren en ontwikkelen. Wat wil jij als eerste leren?
                    </p>
                </figcaption>
            </figure>
        </article>
        <article class="grid-container-two">
            <figure class="grid-item-two">
                <img src="images/mcfollow.jpg" alt="mc follow">
                <figcaption>
                    <h3>
                        Volg ons op de voet
                    </h3>
                    <p>
                        Onze nieuwsbrief: van tijdelijke toppers tot waanzinnige winacties.*
                    </p>
                </figcaption>
            </figure>
            <figure class="grid-item-two">
                <img src="images/mcenjoy.jpg" alt="mc enjoy">
                <figcaption>
                    <h3>
                        Heb je genoten?
                    </h3>
                    <p>
                        We zijn benieuwd naar jouw feedback. En heb je een vraag of opmerking over je restaurantbezoek? Laat het aan het restaurantteam weten.*
                    </p>
                </figcaption>
            </figure>
        </article>
    </main>
<!--footer-->
    <?php
        require_once "includes/footer.php";
    ?>
</body>
</html>
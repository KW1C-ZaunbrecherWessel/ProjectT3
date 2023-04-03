<?php
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
    <body>
    <main>
<!--     Joris   we moeten ook sommige vragen radio button, checklist en tekst veld, alle velden moeten verplicht zijn ingevuld, dat weet je dat -->
        <article>
            <form action="resultaten.php" method="post" id="enquete">
                    <!-- de 1e vraag maken  -->
                <h3>
                    Burger Quiz!!!
                </h3>
    <!--                    vraag 1-->
                <h3>
                    Wat is je favoriet stuk vlees?
                </h3>
                    <input type="radio" name="vraag1" value="1" required>
                    <label for="vraag1">Kip </label>

                    <input type="radio" name="vraag1" value="1" required>
                    <label for="vraag1">Rund</label>

                    <input type="radio" name="vraag1" value="1" required>
                    <label for="vraag1">Varken </label>

                    <input type="radio" name="vraag1" value="1" required>
                    <label for="vraag1">Iuuueewwww Vlees ik ben een ranzige vega en ik hou van dieren en geef bomen knuffels</label>
    <!--                vraag 2-->
                <h3>
                    Wat is je favoriete saus?
                </h3>
                    <input type="radio" name="vraag2" value="1" required>
                    <label for="vraag2">Ketchup </label>

                    <input type="radio" name="vraag2" value="1" required>
                    <label for="vraag2">BBQ saus</label>

                    <input type="radio" name="vraag2" value="1" required>
                    <label for="vraag2">Mayo </label>

                    <input type="radio" name="vraag2" value="1" required>
                    <label for="vraag2">Mosterd</label>
        <!--                vraag 3-->
                <h3>
                    vind je kip lekkerder dan vlees
                </h3>
                    <input type="radio" name="vraag3" value="1" required>
                    <label for="vraag3">Ja </label>

                    <input type="radio" name="vraag3" value="1" required>
                    <label for="vraag3">Nee</label>

                    <input type="radio" name="vraag3" value="1" required>
                    <label for="vraag3">geen verschil </label>

                    <input type="radio" name="vraag3" value="1" required>
                    <label for="vraag3">geen vlees</label>
                    <!--                vraag 4-->
                <h3>
                    Wat is je favoriete topping?
                </h3>
                    <input type="radio" name="vraag4" value="1" required>
                    <label for="vraag4">Sla </label>

                    <input type="radio" name="vraag4" value="1" required>
                    <label for="vraag4">Tomaat</label>

                    <input type="radio" name="vraag4" value="1" required>
                    <label for="vraag4">Augurk </label>

                    <input type="radio" name="vraag4" value="1" required>
                    <label for="vraag4">Kaas</label>
                    <!--       vraag 5-->
                <h3>
                    Hoeveel geef je om het Milieu
                </h3>
                    <input type="radio" name="vraag5" value="1" required>
                    <label for="vraag5">erg veel </label>

                    <input type="radio" name="vraag5" value="1" required>
                    <label for="vraag5">redelijk veel</label>

                    <input type="radio" name="vraag5" value="1" required>
                    <label for="vraag5">ben er niet mee bezig </label>

                    <input type="radio" name="vraag5" value="1" required>
                    <label for="vraag5">helemaal niet</label>
                    <!--                vraag 6-->
                <h3>
                    Hoeveel geld geef je het liefste uit aan een burger?
                </h3>
                    <input type="radio" name="vraag6" value="1" required>
                    <label for="vraag6">4 tot 5 euro </label>

                    <input type="radio" name="vraag6" value="1" required>
                    <label for="vraag6">3 tot 4 euro</label>

                    <input type="radio" name="vraag6" value="1" required>
                    <label for="vraag6">zo min mogelijk</label>

                    <input type="radio" name="vraag6" value="1" required>
                    <label for="vraag6">het maakt me niet uit</label>
                    <!--        vraag 7-->
                <h3>
                    Welk sterrenbeeld heb je?
                </h3>
                    <input type="radio" name="vraag7" value="1" required>
                    <label for="vraag7">Ram, Leeuw en Boogschutter: </label>

                    <input type="radio" name="vraag7" value="1" required>
                    <label for="vraag7">Stier, Maagd, Steenbok</label>

                    <input type="radio" name="vraag7" value="1" required>
                    <label for="vraag7"> </label>

                    <input type="radio" name="vraag7" value="1" required>
                    <label for="vraag7">Nee</label>
                    <!--                vraag 8-->
                    <input type="radio" name="vraag8" value="1" required>
                    <label for="vraag8">Ja </label>

                    <input type="radio" name="vraag8" value="1" required>
                    <label for="vraag8">Nee</label>

                    <input type="radio" name="vraag8" value="1" required>
                    <label for="vraag8">Ja </label>

                    <input type="radio" name="vraag8" value="1" required>
                    <label for="vraag8">Nee</label>
                    <!--  vraag 9-->
                    <input type="radio" name="vraag9" value="1" required>
                    <label for="vraag9">Ja </label>

                    <input type="radio" name="vraag9" value="1" required>
                    <label for="vraag9">Nee</label>

                    <input type="radio" name="vraag9" value="1" required>
                    <label for="vraag9">Ja </label>

                    <input type="radio" name="vraag9" value="1" required>
                    <label for="vraag9">Nee</label>
                    <!--                vraag 10-->
                    <input type="radio" name="vraag10" value="1" required>
                    <label for="vraag10">Ja </label>

                    <input type="radio" name="vraag10" value="1" required>
                    <label for="vraag10">Nee</label>

                    <input type="radio" name="vraag10" value="1" required>
                    <label for="vraag10">Ja </label>

                    <input type="radio" name="vraag10" value="1" required>
                    <label for="vraag11">Nee</label>
                    <!--          vraag 11-->
                    <input type="radio" name="vraag11" value="1" required>
                    <label for="vraag11">Ja </label>

                    <input type="radio" name="vraag11" value="1" required>
                    <label for="vraag11">Nee</label>

                    <input type="radio" name="vraag11" value="1" required>
                    <label for="vraag11">Ja </label>

                    <input type="radio" name="vraag11" value="1" required>
                    <label for="vraag11">Nee</label>
                    <!--                vraag 12-->
                    <input type="radio" name="vraag12" value="1" required>
                    <label for="vraag12">Ja </label>

                    <input type="radio" name="vraag12" value="1" required>
                    <label for="vraag12">Nee</label>

                    <input type="radio" name="vraag12" value="1" required>
                    <label for="vraag12">Ja </label>

                    <input type="radio" name="vraag12" value="1" required>
                    <label for="vraag12">Nee</label>

                    <!--                drie vragen voor naam email en leeftijd -->
                    <input type="text" name="vraag13" value="0" required>
            </form>

        </article>
    </main>
    </body>
</html>

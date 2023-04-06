<?php
// Auteur: Joris en Stef
// Datum: 29-03-23
// omschrijving: dit is de form pagina
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
        include "includes/header.php";
    ?>
    <body>
    <main>
<!--     Joris   we moeten ook sommige vragen radio button, checklist en tekst veld, alle velden moeten verplicht zijn ingevuld, dat weet je dat -->
        <article class="formbg">
            <form action="./coockie.php" method="post" id="enquete">
                    <!-- de 1e vraag maken  -->
                <h2>
                    Burger Quiz!!!
                </h2>
    <!--                    vraag 1-->

                <h3>
                    Wat is je favoriet stuk vlees?
                </h3>
                <ul class="formul">
                    <li class="formli">
                        <input type="radio" id="vraag1A" name="vraag1" value="30" required>
                        <label for="vraag1A">Kip </label>
                    </li class="formli">
                    <li class="formli">
                        <input type="radio" id="vraag1B" name="vraag1" value="15" required>
                        <label for="vraag1B">Rund</label>
                    </li>
                    <li class="formli">
                        <input type="radio" id="vraag1C"  name="vraag1" value="10" required>
                        <label for="vraag1C">Varken </label>
                    </li>
                    <li class="formli">
                        <input type="radio" id="vraag1D" name="vraag1" value="5" required>
                        <label for="vraag1D">Iuuueewwww Vlees</label>
                    </li>
                </ul>

    <!--                vraag 2-->
                <h3>
                    Wat is je favoriete saus?
                </h3>
                <ul class="formul">
                    <li class="formli">
                    <input type="radio" id="vraag2A" name="vraag2" value="20" required>
                    <label for="vraag2A">Ketchup </label>
                    </li>
                    <li class="formli">
                    <input type="radio" id="vraag2B" name="vraag2" value="30" required>
                    <label for="vraag2B">BBQ saus</label>
                    </li>
                    <li class="formli">
                    <input type="radio" id="vraag2C" name="vraag2" value="15" required>
                    <label for="vraag2C">Mayo </label>
                    </li>
                    <li class="formli">
                    <input type="radio" id="vraag2D" name="vraag2" value="5" required>
                    <label for="vraag2D">Mosterd</label>
                    </li>
                </ul>
        <!--                vraag 3-->
                <h3>
                    vind je kip lekkerder dan ander vlees?
                </h3>
                <ul class="formul">
                    <li class="formli">
                    <input type="radio" id="vraag3A" name="vraag3" value="35" required>
                    <label for="vraag3A">Ja </label>
                    </li>
                    <li class="formli">
                    <input type="radio" id="vraag3B" name="vraag3" value="10" required>
                    <label for="vraag3B">Nee</label>
                    </li>
                    <li class="formli">
                    <input type="radio" id="vraag3C" name="vraag3" value="15" required>
                    <label for="vraag3C">geen verschil </label>
                    </li>
                    <li class="formli">
                    <input type="radio" id="vraag3D" name="vraag3" value="5" required>
                    <label for="vraag3D">geen vlees</label>
                    </li>
                </ul>
                    <!--                vraag 4-->
                <h3>
                    Wat is je favoriete topping?
                </h3>
                    <ul class="formul">
                        <li class="formli">
                    <input type="radio" id="vraag4A" name="vraag4" value="15" required>
                    <label for="vraag4A">Sla </label>
                        </li>
                        <li class="formli">
                    <input type="radio" id="vraag4B" name="vraag4" value="10" required>
                    <label for="vraag4B">Tomaat</label>
                        </li>
                        <li class="formli">
                    <input type="radio" id="vraag4C" name="vraag4" value="12" required>
                    <label for="vraag4C">Augurk </label>
                        </li>
                        <li class="formli">
                    <input type="radio" id="vraag4D" name="vraag4" value="10" required>
                    <label for="vraag4D">Kaas</label>
                        </li>
                    </ul>
                    <!--       vraag 5-->
                <h3>
                    Hoeveel geef je om het Milieu?
                </h3>
                        <ul class="formul">
                            <li class="formli">
                    <input type="radio" id="vraag5A" name="vraag5" value="5" required>
                    <label for="vraag5A">erg veel </label>
                            </li>
                            <li class="formli">
                    <input type="radio" id="vraag5B" name="vraag5" value="10" required>
                    <label for="vraag5B">redelijk veel</label>
                            </li>
                            <li class="formli">
                    <input type="radio" id="vraag5C" name="vraag5" value="15" required>
                    <label for="vraag5C">ben er niet mee bezig </label>
                            </li>
                            <li class="formli">
                    <input type="radio" id="vraag5D" name="vraag5" value="17" required>
                    <label for="vraag5D">helemaal niet</label>
                            </li>
                        </ul>
                    <!--                vraag 6-->
                <h3>
                    Hoeveel geld geef je het liefste uit aan een burger?
                </h3>
                            <ul class="formul">
                                <li class="formli">
                    <input type="radio" id="vraag6A" name="vraag6" value="10" required>
                    <label for="vraag6A">4 tot 5 euro </label>
                                </li>
                                <li class="formli">
                    <input type="radio" id="vraag6B" name="vraag6" value="10" required>
                    <label for="vraag6B">3 tot 4 euro</label>
                                </li>
                                <li class="formli">
                    <input type="radio" id="vraag6C" name="vraag6" value="10" required>
                    <label for="vraag6C">zo min mogelijk</label>
                                </li>
                                <li class="formli">
                    <input type="radio" id="vraag6D" name="vraag6" value="10" required>
                    <label for="vraag6D">het maakt me niet uit</label>
                                </li>
                            </ul>
                    <!--        vraag 7-->

                <h3>
                    Wat is je sterrenbeeld?
                </h3>
                                <ul class="formul">
                                    <li class="formli">
                    <input type="radio" id="vraag7A" name="vraag7" value="10" required>
                    <label for="vraag7A">Ram, Leeuw en Boogschutter: </label>
                                    </li>
                                    <li class="formli">
                    <input type="radio" id="vraag7B" name="vraag7" value="15" required>
                    <label for="vraag7B">Stier, Maagd, Steenbok</label>
                                    </li>
                                    <li class="formli">
                    <input type="radio" id="vraag7C" name="vraag7" value="20" required>
                    <label for="vraag7C">Tweeling, Weegschaal, Waterman </label>
                                    </li>
                                    <li class="formli">
                    <input type="radio" id="vraag7D" name="vraag7" value="-5" required>
                    <label for="vraag7D">Kreeft, Schorpioen, Vissen</label>
                                    </li>
                                </ul>
                    <!--                vraag 8-->
                <h3>
                    Hoeveel eetlust heb je?
                </h3>
                    <ul class="formul">
                        <li class="formli">
                    <input type="radio" id="vraag8A" name="vraag8" value="35" required>
                    <label for="vraag8A">weinig</label>
                        </li>
                        <li class="formli">
                    <input type="radio" id="vraag8B" name="vraag8" value="-5" required>
                    <label for="vraag8B">weinig</label>
                        </li>
                        <li class="formli">
                    <input type="radio" id="vraag8C" name="vraag8" value="1" required>
                    <label for="vraag8C">gewoon</label>
                        </li>
                        <li class="formli">
                    <input type="radio" id="vraag8D" name="vraag8" value="15" required>
                    <label for="vraag8D">veel</label>
                        </li>
                    </ul>
                    <!--  vraag 9-->
                <h3>
                    Heb je graag groente op je burger of het liefst zo min mogelijk?
                </h3>
                    <ul class="formul">
                        <li class="formli">
                <input type="radio" id="vraag9A" name="vraag9" value="-10" required>
                    <label for="vraag9A">Ja lekker veel </label>
                        </li>
                        <li class="formli">
                    <input type="radio" id="vraag9B" name="vraag9" value="15" required>
                    <label for="vraag9B">Nee</label>
                        </li>
                        <li class="formli">
                    <input type="radio" id="vraag9C" name="vraag9" value="10" required>
                    <label for="vraag9C">niet te veel </label>
                        </li>
                        <li class="formli">
                    <input type="radio" id="vraag9D" name="vraag9" value="35" required>
                    <label for="vraag9D">klein beetje</label>
                        </li>
                    </ul>
                    <!--                vraag 10-->
                <h3>
                    Sport je veel?
                </h3>
                    <ul class="formul">
                        <li class="formli">
                    <input type="radio" id="vraag10A" name="vraag10" value="50" required>
                    <label for="vraag10A">Ja</label>
                        </li>
                        <li class="formli">
                    <input type="radio" id="vraag10B" name="vraag10" value="-5" required>
                    <label for="vraag10B">Nee</label>
                        </li>
                        <li class="formli">
                    <input type="radio" id="vraag10C" name="vraag10" value="5" required>
                    <label for="vraag10C">Hier en Daar</label>
                        </li>
                        <li class="formli">
                    <input type="radio" id="vraag10D" name="vraag10" value="10" required>
                    <label for="vraag10D">ik kan niet sporten om diverse redenen</label>
                        </li>
                    </ul>
                    <!--          vraag 11-->
                <h3>
                    wat is je favoriete pizza topping?
                </h3>
                <ul class="formul">
                    <li class="formli">
                    <input type="radio" id="vraag11A" name="vraag11" value="35" required>
                    <label for="vraag11A"> Gegrilde kipstukjes </label>
                    </li>
                    <li class="formli">
                    <input type="radio" id="vraag11B" name="vraag11" value="10" required>
                    <label for="vraag11B">Verse bacon. </label>
                    </li>
                    <li class="formli">
                    <input type="radio" id="vraag11C" name="vraag11" value="15" required>
                    <label for="vraag11C">Rundergehakt.  </label>
                    </li>
                    <li class="formli">
                    <input type="radio" id="vraag11D" name="vraag11" value="-5" required>
                    <label for="vraag11D">Champignon. </label>
                    </li>
                </ul>
                    <!--                vraag 12-->
                <h3>
                    wat is je favoriete huisdier?
                </h3>
                <ul class="formul">
                    <li class="formli">
                    <input type="radio" id="vraag12A" name="vraag12" value="10" required>
                    <label for="vraag12A">Hond </label>
                    </li>
                    <li class="formli">
                    <input type="radio" id="vraag12B" name="vraag12" value="15" required>
                    <label for="vraag12B">Kat</label>
                    </li>
                    <li class="formli">
                    <input type="radio" id="vraag12C" name="vraag12" value="35" required>
                    <label for="vraag12C">Vogels </label>
                    </li>
                    <li class="formli">
                    <input type="radio" id="vraag12D" name="vraag12" value="-10" required>
                    <label for="vraag12D">ik hou niet van huisdieren</label>
                    </li>
                </ul>

                    <!--                drie vragen voor naam email en leeftijd -->
                <h3>
                    wat is je naam?
                </h3>
                <input type="text" id="vraag13" name="vraag13" placeholder="Jou naam..." required>
                <h3>
                    Wat is je Email?
                </h3>
                <input type="text" id="vraag14" name="vraag14" placeholder="Jouw E-mail..." required>
                <h3>
                    Wat is je leeftijd
                </h3>

<!--                0 tot en met 9-->
                <input type="checkbox" class="leeftijd" name="vraag15">
                <label for="vraag15">0</label>
                <input type="checkbox" class="leeftijd" name="vraag15">
                <label for="vraag15">1</label>
                <input type="checkbox" class="leeftijd" name="vraag15">
                <label for="vraag15">2</label>
                <input type="checkbox" class="leeftijd" name="vraag15">
                <label for="vraag15">3</label>
                <input type="checkbox" class="leeftijd" name="vraag15">
                <label for="vraag15">4</label>
                <input type="checkbox" class="leeftijd" name="vraag15">
                <label for="vraag15">5</label>
                <input type="checkbox" class="leeftijd" name="vraag15">
                <label for="vraag15">6</label>
                <input type="checkbox" class="leeftijd" name="vraag15">
                <label for="vraag15">7</label>
                <input type="checkbox" class="leeftijd" name="vraag15">
                <label for="vraag15">8</label>
                <input type="checkbox" class="leeftijd" name="vraag15">
                <label for="vraag15">9</label>
                <br>
                <input type="checkbox" class="leeftijd" name="vraag15">
                <label for="vraag15">0</label>
                <input type="checkbox" class="leeftijd" name="vraag15">
                <label for="vraag15">1</label>
                <input type="checkbox" class="leeftijd" name="vraag15">
                <label for="vraag15">2</label>
                <input type="checkbox" class="leeftijd" name="vraag15">
                <label for="vraag15">3</label>
                <input type="checkbox" class="leeftijd" name="vraag15">
                <label for="vraag15">4</label>
                <input type="checkbox" class="leeftijd" name="vraag15">
                <label for="vraag15">5</label>
                <input type="checkbox" class="leeftijd" name="vraag15">
                <label for="vraag15">6</label>
                <input type="checkbox" class="leeftijd" name="vraag15">
                <label for="vraag15">7</label>
                <input type="checkbox" class="leeftijd" name="vraag15">
                <label for="vraag15">8</label>
                <input type="checkbox" class="leeftijd" name="vraag15">
                <label for="vraag15">9</label>
                <br>

                <br>

<!--                submit button-->
                <input class="button" type="submit" value="Burger Time">
            </form>

        </article>
    </main>
    <?php
        include "includes/footer.php"
    ?>
    </body>
</html>

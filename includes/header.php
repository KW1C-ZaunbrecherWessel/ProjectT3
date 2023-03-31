<?php
/*
 * auteur:         wessel zaunbrecher
 * aanmaakdatum:   21-3-2023
 * omschrijving:   ProjectT3
 */
?>
<div class="row">
    <header class="column left">
        <a href="./index.php">
            <figure>
                <img src="./images/logomcdonalds.jpg" alt="logo mc donald's" height="100px" width="auto">
            </figure>
        </a>
    </header>
    <nav class="column middle">
        <ul id="nav1">
            <li>
                <a href="./wip.php">App</a>
            </li>
            <li>
                <a href="./wip.php">McDonald's Nieuwsbrief</a>
            </li>
            <li>
                <a href="./wip.php">Werken bij McDonalds</a>
            </li>
            <li>
                <a href="./wip.php">Franchising</a>
            </li>
        </ul>

        <ul id="nav2">
            <li>
                <a href="./wip.php">Menu</a>
            </li>
            <li>
                <a href="./wip.php">Pers</a>
            </li>
            <li>
                <a href="./wip.php">Services</a>
            </li>
            <li>
                <a href="./wip.php">Goed om te weten</a>
            </li>
            <li>
                <a href="./wip.php">Familie</a>
            </li>
            <li>
                <a href="./wip.php">Ook dat doet McDonald's</a>
            </li>
            <li>
                <a href="./survey.php">Burger quiz!</a>
            </li>
        </ul>
    </nav>
    <nav class="column right">
        <ul>
            <li>
                <a href="./wip.php">Zoeken</a>
            </li>
            <li>
                <a href="./wip.php">Vind een restaurant</a>
            </li>
        </ul>
        <ul>
            <li>
                <?php
                    include "tijd.php"
                ?>
            </li>
        </ul>
    </nav>
    <header class="smol">
        <a href="./index.php">
            <figure>
                <img src="./images/logomcdonalds.jpg" alt="logo mc donald's" height="100px" width="auto">
            </figure>
        </a>
        <ul>
            <li>
                <?php
                include "tijd.php"
                ?>
            </li>
        </ul>
    </header>
    <nav class="dropdown">
        <button class="dropbtn"><img src="./images/menu.png" height="50px" width="auto"> </button>
        <div class="dropdown-content">
            <a href="./wip.php">App</a>
            <a href="./wip.php">McDonald's Nieuwsbrief</a>
            <a href="./wip.php">Werken bij McDonalds</a>
            <a href="./wip.php">Franchising</a>
            <a href="./wip.php">Menu</a>
            <a href="./wip.php">Pers</a>
            <a href="./wip.php">Services</a>
            <a href="./wip.php">Goed om te weten</a>
            <a href="./wip.php">Familie</a>
            <a href="./wip.php">Ook dat doet McDonald's</a>
            <a href="./survey.php">Burger quiz!</a>
            <a href="./wip.php">Zoeken</a>
            <a href="./wip.php">Vind een restaurant</a>
        </div>
    </nav>
</div>
<hr>
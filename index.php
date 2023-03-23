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
<?php
    include "includes/header.php";
?>
<body>
    <main>
        <article>
            <figure>
                <img id="happymeal" src="images/happymeal.png">
            </figure>
        </article>
        <article>
            <figure>
                <img src="images/mcapp.jpg">
            </figure>
            <figure>
                <img src="images/mccafe.jpg">
            </figure>
            <figure>
                <img src="images/mcdelivery.jpg">
            </figure>
        </article>
        <article>
            <figure>
                <img src="images/mccrew.jpg">
            </figure>
            <figure>
                <img src="images/mcfuture.jpg">
            </figure>
        </article>
        <article>
            <figure>
                <img src="images/mcfollow.jpg">
            </figure>
            <figure>
                <img src="images/mcenjoy.jpg">
            </figure>
        </article>
    </main>
<!--footer-->
    <?php
        require_once "includes/footer.php";
    ?>
</body>
</html>
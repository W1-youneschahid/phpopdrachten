<?php
/**
 * User: Younes Chahid
 * Date: 11-2-2020
 * Time: 11:57
 * File: opdracht2.2.php
 */
?>
    <!DOCTYPE HTML>
    <html>
<head>
    <meta name="description" content=" ">
    <meta name="keywords" content=" ">
    <meta charset="UTF-8">
    <link href="/phpopdrachten/css/style.css" rel="stylesheet">
</head>
<body>
<header>
    <h1><?php echo "Uitwerking van PHP-opdrachten"; ?></h1>
</header>
<aside>
    <section>
        <h2>Menu</h2>
        <ul>
            <li>Hoofdstuk 2
                <ul>
                    <li>
                        <a href="opdracht2.1.php">Opdracht 2.1</a>
                    </li>
                    <li>
                        <a href="opdracht2.2.php">Opdracht 2.2</a>
                    </li>
                </ul>
            </li>
            <br>
            <li>Hoofdstuk 3
                <ul>
                    <li>
                        <a href="hoofdstuk3/opdracht3.1.php">Opdracht 3.1</a>
                    </li>
                    <li>
                        <a href="hoofdstuk3/opdracht3.2.php">Opdracht 3.2</a>
                    </li>
                    <li>
                        <a href="hoofdstuk3/opdracht3.3.php">Opdracht 3.3</a>
                    </li>
                </ul>
            </li>
            <br>
            <li>Hoofdstuk 4
                <ul>
                    <li>
                        <a href="hoofdstuk4/opdracht4.1.php">Opdracht 4.1</a>
                    </li>
                    <li>
                        <a href="hoofdstuk4/opdracht4.2.php">Opdracht 4.2</a>
                    </li>
                    <li>
                        <a href="hoofdstuk4/opdracht4.3.php">Opdracht 4.3</a>
                    </li>
                    <li>
                        <a href="hoofdstuk4/opdracht4.4.php">Opdracht 4.4</a>
                    </li>
                </ul>
            </li>
            <br>
            <li>Hoofdstuk 5
                <ul>
                    <li>
                        <a href="hoofdstuk5/opdracht5.1.php">Opdracht 5.1</a>
                    </li>
                    <li>
                        <a href="hoofdstuk5/opdracht5.2.php">Opdracht 5.2</a>
                    </li>
                    <li>
                        <a href="hoofdstuk5/opdracht5.3.php">Opdracht 5.3</a>
                    </li>
                    <li>
                        <a href="hoofdstuk5/opdracht5.4.php">Opdracht 5.4</a>
                    </li>
                </ul>
            </li>
        </ul>
        <br>
        <a href="/phpopdrachten/index.php">Terug</a>
    </section>
</aside>
<main id="wrapper">
    <h2>Uitwerkingen</h2>
    <?php
    $text1 = "Hallo";
    $text2 = "een makkelijke taal";
    $text3 = "toch zo'n makkelijke taal";
    $text4 = "wat is";
    $text5 = "PHP";
    $text6 = "Nooit gedacht dat";
    $text7 = "De installatie is best ingewikkeld";
    $text8 = "Fijn";
    $text9 = "?";
    $text10 = ".";
    $text11 = ",";
    $text12 = "<br>";
    $text13 = "is";
    $text14 = "Vind je niet";
    $text15 = "toch";
    $text16 = "dat";
    $text17 = "zo'n makkelijke taal";

    echo "<p>"."$text1"."$text11"." "."$text4"." "."$text5"." "."$text15"." "."$text2"."$text10"."$text12"
        ."$text7"."$text10"." "."$text8"." "."$text15"."$text9"."$text12"
        ."$text6"." "."$text5"." "."$text3"." "."$text13"."$text10"."</p>"
    ?>

    <?php
    echo "<p>"."$text1"."$text11"."$text12"
        ."$text8"." "."$text15"." "."$text16"." "."$text5"." "."$text17"." "."$text13"."$text10"."$text12"
        ."$text7"."$text10"." "."$text14"."$text9"

    ?>
</main>
</body>
    </html><?php

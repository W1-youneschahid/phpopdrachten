<?php
/**
 * User: Younes Chahid
 * Date: 20-2-2020
 * Time: 10:49
 * File: opdracht3.1.php
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
            <a href="/includes/index.php">Terug</a>
        </section>
    </aside>
    <main id="wrapper">
        <h2>Uitwerkingen</h2>
    </main>
    <footer>
        <?php
        include("includes/footer.php")
        ?>
    </footer>
 <main id="wrapper">
        <?php
        $event = "Elfstedentocht";
        $eventInFries = "Alvestêdetocht";
        $amountOfKilometers = 200;
        $eventType = "schaatstocht";
        $groundType = "natuurijs";
        $organisator = "Koninklijke Vereniging De Friesche Elf Steden";
        $startFinishPlace = "Leeuwarden";
        $province = "Friesland";
        $firstYearOfEvent = 1909;
        $amountOfTimeOfEvent = 15;
        $amountOfTimeInWinter = 1;

        $verhaal = ("<p>De ". $event . " (Fries: " . $eventInFries . ") is een " . 200 . " kilometer <br>
    lange " . $eventType . " over " . $groundType . " die wordt georganiseerd door <br>
    de " . $organisator . ". " . $startFinishPlace . ", <br>
    de hoofdstad van " . $province . ", is start- en aankomstplaats. De <br>" .
            $event . " is inmiddels " . $amountOfTimeOfEvent . " maal verreden en werd voor het <br>
    eerst in " . $firstYearOfEvent . " gereden en wordt maximaal " . $amountOfTimeInWinter . " keer per winter <br>
    gehouden.</p>");

        echo("$verhaal");

        $txt1 = "Elfstedentocht";
        $txt2 = "Alvestêdetocht";
        $txt3 = 200;
        $txt4 = "schaatstocht";
        $txt5 = "natuurijs";
        $txt6 = "Koninklijke Vereniging De Friesche Elf Steden";
        $txt7 = "Leeuwarden";
        $txt8 = "Friesland";
        $txt9 = 15;
        $txt10 = 1909;
        $txt11 = 1;

        echo("De " . $txt1 . " (Fries: " . " $txt2" . " is een " . $txt3 . " kilometer <br>");
        echo("lange " . $txt4 . " over " . $txt5 . " die wordt georganiseerd door <br>");
        echo("de " . $txt6 . "." . $txt7 . ",<br>");
        echo("de hoofdstad van " . $txt8 . ", is start- en aankomstplaats. De <br>");
        echo($txt1 . " is inmiddels " . $txt9 . " maal verreden en werd voor het <br>");
        echo("eerst in " . $txt10 . " gereden en wordt maximaal" . $txt11 . " keer per winter <br>");
        echo("gehouden.");


        ?>
    </main>
    </body>
    </html>
<?php

<?php
/**
 * User: younes chahid
 * Date: 20-2-2020
 * Time: 8:42
 * File: opdracht3.2.php
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
    </main>
    <footer>
        <?php
        include("includes/footer.php")
        ?>
    </footer>
    <main id="wrapper">
        <?php
        // Declareren en initialiseren van de gewenste variabelen
        $trafficLightColor = "Groen";
        $ambulanceComing = True;

        // driveOn declareren en initialiseren
        $driveOn = true;

        if($trafficLightColor == "Groen" && $ambulanceComing == false)
        {
            $driveOn = true;
        }
        else if($trafficLightColor == "Groen" && $ambulanceComing == true)
        {
            $driveOn = false;
        }
        else if($trafficLightColor == "Oranje")
        {
            $driveOn = false;
        }
        else if($trafficLightColor == "Rood")
        {
            $driveOn = false;
        }
        else
        {
            $driveOn = true;
            echo("<p>foutje. Het stoplicht heeft een ongeldige kleur.</p>");
        }

        // Tonen van melding aan de automobilist
        if($driveOn == true)
        {
            echo("<h1 class ='Greentext'>U mag doorrijden.</h1>");
        }
        else
        {
            echo("<h1 style='color: red;'>U mag niet doorrijden.");
        }
        ?>

        <hr>

        <?php

        // Deel 2: Alcohol in verschillende landen opdracht
        $countryName = "Zweden";
        $currentAge = 19;


        // Tonen algemene gegevens drank
        echo("<p>Je woont in ". $countryName . " en je bent " . $currentAge . " jaar oud.</p>");


        // Tonen van de drank informatie Nederland
        if($countryName == "Nederland" && $currentAge >= 18)
        {
            echo("<p>Je mag hier sterke en zwakke alcohol drinken.</p>");
        }
        else if($countryName == "Nederland" && $currentAge < 18)
        {
            echo("<p>Hier mag je geen alcohol drinken.</p>");
        }



        // Tonen van de drank informatie België
        if($countryName == "België" && $currentAge >= 16 && $currentAge <= 18)
        {
            echo("<p>Je mag hier zwakke alcohol drinken.</p>");
        }
        else if($countryName == "België" && $currentAge >= 18)
        {
            echo("<p>Je mag hier sterke en zwakke alcohol drinken.</p>");
        }
        else if($countryName == "België" && $currentAge < 16)
        {
            echo("<p>hier mag je geen alcohol drinken.</p>");
        }



        // Tonen van de drank informatie Bulgarijë
        if($countryName == "Bulgarije" && $currentAge >= 18)
        {
            echo("<p>Je mag hier sterke en zwakke alcohol drinken.</p>");
        }
        else if($countryName == "Cyprus" && $currentAge < 17)
        {
            echo("<p>Hier mag je geen alcohol drinken.</p>");
        }



        // Tonen van de drank informatie Cyprus
        if($countryName == "Cyprus" && $currentAge >= 17)
        {
            echo("<p>Je mag hier sterke en zwakke alcohol drinken.</p>");
        }
        else if($countryName == "Cyprus" && $currentAge < 17)
        {
            echo("<p>Hier mag je geen alcohol drinken.</p>");
        }



        // Tonen van de drank informatie Zweden
        if($countryName == "Zweden" && $currentAge >= 18 && $currentAge <= 19)
        {
            echo("<p>Je mag hier zwakke alcohol drinken.</p>");
        }
        else if($countryName == "Zweden" && $currentAge >= 20)
        {
            echo("<p>Hier mag je sterke en zwakke alcohol drinken.</p>");
        }
        else if($countryName == "Zweden" && $currentAge < 18)
        {
            echo("<p>Hier mag je geen alcohol drinken.</p>");
        }


        ?>
    </main>
    </body>
    </html>


<?php
<html >
<head>
    <link href="../../css/style.css" type="text/css" rel="stylesheet">
</head>

<?php
include '../../includes/header.php';
?>
<aside>
    <section>
        <h2>HoofdMenu</h2>
        <ul>
            <li>Hoofdstuk 2
                <ul>
                    <li>
                        <a href="../../H2/2.1/2.1.php">Opdracht 2.1</a>
                    </li>
                    <li>
                        <a href="../../H2/2.2/2.2.php">Opdracht 2.2</a>
                    </li>
                </ul>
            </li>
        </ul>
        <ul>
            <li>Hoofdstuk 3
                <ul>
                    <li>
                        <a href="../../H3/3.1/3.1.php">Opdracht 3.1</a>
                    </li>

                    <li>
                        <a href="../../H3/3.2.php">Opdracht 3.2</a>
                    </li>
                    <li>
                        <a href="../../H3/3.3.php">Opdracht 3.3</a>
                    </li>
                </ul>
            </li>
        </ul>
        <ul>
            <li>Hoofdstuk 4
                <ul>
                    <li>
                        <a href="../../H4/4.1/4.1.php">Opdracht 4.1</a>
                    </li>
                    <li>
                        <a href="../../H4/4.2/4.2.php">Opdracht 4.2</a>
                    </li>
                    <li>
                        <a href="../../H4/4.3/4.3.php">Opdracht 4.3</a>
                    </li>
                    <li>
                        <a href="../../H4/4.4/4.4.php">Opdracht 4.4</a>
                    </li>
                </ul>
            </li>
        </ul>
        <ul>
            <li>Hoofdstuk 5
                <ul>
                    <li>
                        <a href="../../H5/5.1/5.1.php">Opdracht 5.1</a>
                    </li>
                    <li>
                        <a href="../../H5/5.2/5.2.php">Opdracht 5.2</a>
                    </li>
                    <li>
                        <a href="hoofdstuk2/opdracht_2-2.php">Opdracht 5.3</a>
                    </li>
                    <li>
                        <a href="hoofdstuk2/opdracht_2-2.php">Opdracht 5.4</a>
                    </li>
                </ul>
            </li>
        </ul>
    </section>
</aside>
<main id="wrapper">
    <h2 id="uitwerking">Uitwerkingen</h2>

    <?php

    //---de date() functie kun je een tweede parameter doorgeven waarmee je aangeeft welke
    //---dag je wil hebben. Als je geen tweede parameter doorgeeft dan is het de datum van Vandaag
    //
    //$datum = date('d-m-Y);
    //echo $datum;


    // --- MET de strtotime() functie kunnen we een datum in
    // ---string formaat omzetten naar een getalswaarde (timestamp).
    //
    //$dag0 = strtotime('now');
    //echo "<br> $dag0";
    // En vervolgens kunnen we dat getal ook doorgeven aan de date() functie
    //$vandaag = date('d-m-Y', $dag0);
    //echo "<br>".$vandaag;

    // -- -DAG +1 TOEVOEGEN HEO DOE JE DAT?
    //
    //$datumAlsGetal = strtotime('+2 days');
    //echo $datumAlsGetal;
    ////En vervolgens kunnen we dat getal ook doorgeven aan de date() functie
    //$morgen = date('d-m-Y', $datumAlsGetal);
    //echo "<br>".$morgen;


    //for ($tel = 0; $tel < 7; $tel++) {
    //    $datumAlsGetal = strtotime("+$tel days");
    //    echo "<br>";
    //    echo "Dit is dag  " . " ";
    //
    //    echo date('w', $datumAlsGetal);
    //    echo " dat is ";
    //    echo date('l', $datumAlsGetal);
    //    echo date('d-m-Y', $datumAlsGetal);


    //$dagNamen = array("zondag", "maandag" ,"dinsdag" ,"woensdag", "donderdag",
    //    "vrijdag", "zaterdag");
    //for ($tel = 0; $tel <7 ; $tel++)
    //{
    //    $datumAlsGetal = strtotime("+$tel days");
    //    echo "<br>";
    //    echo date('d-m-Y', $datumAlsGetal);
    //    echo " en dit is dagnummer ";
    //    echo date('w', $datumAlsGetal);
    //    echo " in deze week";
    //    echo "<br> dagnummer $dagnummer is een ".$dagNamen[$dagnummer];
    //}
    //

    $nu = strtotime("now");
    $datumVandaag = date('d-m-Y', $nu);
    $datumDag = date('w', $nu);

    $dagenWeek = array("zondag", "maandag", "dinsdag", "woensdag", "donderdag", "vrijdag", "zaterdag");


    $morgen = strtotime("+1 days");
    $datumMorgen = date('d-m-Y', $morgen);
    $datumDagMorgen = date('w', $morgen);

    for ($i = 0; $i<7 ; $i++) {
        $now = strtotime("+" . $i . " days");
        $datumVandaag = date('d-m-Y', $now);
        $datumDag = date('w', $nu);
        echo "<br>Dag " . $i . " is een " . $dagenWeek[$i] . " en de datum is " . $datumVandaag;

    }
    ?>

</main>
<footer>
    <?php
    include '../../includes/footer.php';
    ?>
</footer>
</body>
</html>


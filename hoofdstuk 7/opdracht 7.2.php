<html>
<head>
    <title></title>
    <link href="../css/style.css" type="text/css" rel="stylesheet">
</head>
<body>
<header>
    <h1><?php echo "Uitwerking van PHP-opdrachten"; ?></h1>
</header>
<aside id="Menu">
    <section>
        <h2>Menu</h2>
        <ul>
            <li>Hoofdstuk 2
                <ul>
                    <li>
                        <a href="Hoofdstuk02/opdracht21.php">Opdracht 2.1</a>
                    </li>
                    <li>
                        <a href="Hoofdstuk02/opdracht22.php">Opdracht 2.2</a>
                    </li>
                </ul>
            </li>
            <li>Hoofdstuk 3
                <ul>
                    <li>
                        <a href="hoofdstuk03/opdracht_2-1.php">Opdracht 3.1</a>
                    </li>
                    <li>
                        <a href="hoofdstuk03/opdracht_2-2.php">Opdracht 3.2</a>
                    </li>
                </ul>
            </li>
            <li>Hoofdstuk 4
                <ul>
                    <li>
                        <a href="hoofdstuk04/opdracht_2-1.php">Opdracht 4.1</a>
                    </li>
                    <li>
                        <a href="hoofdstuk04/opdracht_2-2.php">Opdracht 4.2</a>
                    </li>
                </ul>
            </li>
            <li>Hoofdstuk 5
                <ul>
                    <li>
                        <a href="hoofdstuk2/opdracht_2-1.php">Opdracht 5.1</a>
                    </li>
                    <li>
                        <a href="hoofdstuk2/opdracht_2-2.php">Opdracht 5.2</a>
                    </li>
                </ul>
            </li>
        </ul>
    </section>
</aside>
<main>
    <?php

try //de code in het try block is de enige code die wordt uitgevoerd
    // als deze code succesvol wordt uitgevoerd
{
    $pdo = new PDO("odbc:odbc2sqlserver");
    echo"database connectie gelukt";
} // de code in het catch blok wordt alleen uitgevoerd als er een fout
    // optreedt in de code in het try block
catch (PDOException $e) {
    echo "<h1>Database error:</h1>";
    echo $e->getMessage();
    die();
}
// Het resultaat van bovenstaande code is dat ik een variabele $pdo heb
// van het type object, waarmee ik een query kan uitvoeren op de database



// $sql is de sql statement die ik wil uitvoeren op de database,
// en aangezien $pdo de connectie-handler is (het object dat de connectie
// vasthoudt)moet ik de query wel op die manier uitvoeren
$sql = 'SELECT * FROM joke';
$result = $pdo->query($sql);
// Maar hoe krijg ik nu alle grappen binnen????
// Ik zie links van het = teken de variabele $result, zou hierin dan alle
// grappen zitten?

?>

    <table>
        <th>ID</th>
        <th>Joketext</th>
        <th>Jokeclue</th>
        <th>Jokedate</th>

<?php
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    // omdat row een associatieve array is kan ik de waardes als associaties
    // uit de rij halen, dus:
    echo "<tr><td>" . $row["id"] . "</td><td>" . $row["joketext"] . "</td><td>" . $row["jokeclou"] . "</td><td>" . $row["jokedate"] . "</td></tr>";
}
?>
    </table>
</main>

</body>
</html>



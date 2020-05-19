<body>
<head>
    <link href="7.3.css" type="text/css" rel="stylesheet">
</head>
<?php
// Inladen functies bestand
include("functions.php");

// Starten van een database connectie
startConnection();

// Executeren van een SQL query
$query = "SELECT * FROM joke";
if(isset($_GET["zoekterm"]) == true)
{
    $query = "SELECT * FROM joke WHERE joketext like '%". $_GET["zoekterm"] ."%' ";
}
$jokes = executeQuery($query);

echo "<p> $query </p>";

echo ("<form action='index.php' method='GET'>");
echo ("<input type='text' name='zoekterm'>");
echo ("<input type='submit' value='zoeken'>");
echo ("</form>");
?>
<table>
    <tr>
        <th>Jokeid</th>
        <th>Joketext</th>
        <th>Jokeclou</th>
        <th>Jokedate</th>
    </tr>

<?php

// Resultaten rij voor rij ophalen
while($row = $jokes->fetch(PDO::FETCH_ASSOC) )
{
    echo "<tr><td>" . $row["id"] . "</td><td>" . $row["joketext"] . "</td><td>" . $row["jokeclou"] . "</td><td>" . $row["jokedate"] . "</td></tr>";
}
?>
</table>
</body>
</html>

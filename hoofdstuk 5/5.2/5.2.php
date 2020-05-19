<?php
/**
 * User: younes chahid
 * Date: 5-03-2020
 * Time:  PM
 * File: 5.2 php
 */
?>
<html>
<head>
    <link href="../../css/style.css" type="text/css" rel="stylesheet">
</head>
<body>
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
    <h1>Uitschrijfformulier KW1C</h1>
    <hr>
    <form action="invullen.php" method="get">
        <table>
            <tr>
                <td>Voor en achternaam</td>
                <td><input type="text" name="fullName"></td>
            </tr>
            <tr>
                <td>Studentennummer</td>
                <td><input type="number" name="studentNumber"></td>
            </tr>
            <tr>
                <td>Datum van uitschrijving</td>
                <td><input type="date" name="date"></td>
            </tr>
            <tr>
                <td>Reden van uitschrijven</td>
                <td>
                    <select name="reason">
                        <option value="Verkeerde keuze">Verkeerde keuze</option>
                        <option value="Saaie lessen">Saaie lessen</option>
                        <option value="Slechte docent">Slechte docent</option>
                        <option value="Stom onderwerp">Stom onderwerp</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Leerjaar</td>
                <td>
                    <input type="radio" name="year" value="1e leerjaar">1e leerjaar<br>
                    <input type="radio" name="year" value="2e leerjaar">2e leerjaar<br>
                    <input type="radio" name="year" value="3e leerjaar">3e leerjaar
                </td>
            </tr>
        </table>
        <input type="checkbox" name="apply" value="Ja">Ik wil me aanmelden bij de succesklas<br>
        <input type="checkbox" name="delete" value="Ja">Ik wil mijn gegevens uit het systeem<br>
        <p>Geef hieronder de reden van je uitschrijving op</p>
        <textarea name="description"></textarea><br>
        <input type="submit" value="Versturen">
    </form>
</main>
<footer>
    <?php
    include '../../includes/footer.php';
    ?>
</footer>
</body>
</html>
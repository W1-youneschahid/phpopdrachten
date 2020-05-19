<?php
    /**
     * User: younes chahid
     * Date: 5-04-2020
     * Time:  PM
     * File: 5.1 php
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



        <!DOCTYPE html>
        <html lang="en">
        <head>

        </head>
        <body>
        <header></header>
        <div id="wrapper">

            <img src="KEES.png" alt="keeskroket" width="25%" height="25%">
            <form  action="form_data.php" method="get">

                <table>
                    <tr>
                        <td>
                            <label>Naam: </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="naam">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>E-mail </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="email">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Onderwerp</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="onderwerp">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Bericht </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="bericht" >
                        </td>
                    </tr>

                </table>
                <input type="submit">
                <br><br>
            </form>

    </main>
    <footer>
        <?php

        include '../../includes/footer.php';
        ?>
    </footer>
    </body>
    </html>

<footer id="Footer">
<?php

    include "varibalen.php";
    //4.1
    date_default_timezone_set("Europe/Amsterdam");
    $uur= date( "H");
    if ($uur >= 0 && $uur <= 5 )
    {
        echo "Goedennacht bezoeker";
    }
    elseif ($uur > 5 && $uur < 12)
    {
        echo "Goedenochtend bezoeker";
    }
    elseif ($uur >= 12 && $uur <= 17  )
    {
        echo "Goedenmiddag bezoeker";
    }
     elseif( $uur > 17 && $uur < 24)
         echo"Goedenavond bezoeker";


    //H3.3
    echo  ", &copy $name &nbsp $year ";




    ?>
    <?php
    session_start();
    if (isset($_SESSION['username'])) {
        $bezoeker = $_SESSION['username']. "&nbsp;<a
href='/phpopdrachten/hoofdstuk6/loguit.php'>Loguit</a>";
    }
    else {
        $bezoeker = "onbekende bezoeker". "&nbsp;<a
href='/phpopdrachten/hoofdstuk6/opdracht61.php'>Login</a>";
    }
    ?>
    //print vervolgens ook de $bezoeker zodat je de volgende visuele
    weergave in de pagina ziet
</footer>
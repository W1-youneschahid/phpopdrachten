<?php
include '../../includes/varibalen.php';
$uur = date('H');

$welkom = "";


/*0-5 Goedennacht
5-12 Goedenochtend
12-17 Goedenmiddag
17-24 Goedenavond*/

if($uur < 5)
{
    $welkom = "goedennacht";
}
elseif ($uur <=12)
{
    $welkom = "goedenochtend";
}
elseif ($uur <=17)
{
    $welkom = "goedenmiddag";
}
elseif ($uur <=0)
{
    $welkom = "goedenavond";
}

<?php
$courseName = "PHP";
$teacherName= " ";

switch($courseName)
{
    case "Javascript":
        $teacherName= "Evers";
        break;
    case "PHP":
        $teacherName= "Spierings";
        break;
    case "ASP":
        $teacherName = "Van Meer";
        break;
    case "SQL":
        $teacherName =" Gijsbrechts";
        break;
    case "Nederlands":
        $teacherName =" Van de Ende";
        break;
    case "Engels":
        $teacherName = "Giesen";
    case "Rekenen":
        $teacherName =" Wetering";
        break;
    case "Loopbaan":
        $teacherName =" Bolattekin";
        break;
    case "Modelleren":
        $teacherName = "Bijnen";
}
echo "voor het vak <b>$courseName</b> heb je <b>$teacherName </b> als docent";

?>

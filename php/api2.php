<?php
$prt = array();
$pret = new stdClass();
$pret -> data = "2023-07-28";
$pret -> camera = 160;
$pret -> cabana = 1000;
array_push($prt, $pret);
$pret1 = new stdClass();
$pret1 -> data = "2023-07-29";
$pret1 -> camera = 160;
$pret1 -> cabana = 1000;
array_push($prt, $pret1);
$myJSON = json_encode($prt);
echo $myJSON;
?>
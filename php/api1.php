<?php
$pret = new stdClass();
$pret -> data = "2023-07-18";
$pret -> camera = 160;
$pret -> cabana = 1000;
$pret -> special = "Pe perioada 24.08.2023-25.08.2023 rezervarea pentru o camera este 200lei/zi si pentru toata pensiunea 1600lei/zi";
$myJSON = json_encode($pret);
echo $myJSON;
?>
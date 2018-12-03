<?php
include ("Fragments/menu.php");

$zodis = $_REQUEST["zodis"];

$ilgis = strlen($zodis);

echo "ivestas $zodis turi $ilgis simboliu";
?>
<?php
include ("Fragments/menu.php");
$skaicius = $_REQUEST["a"];

$skaicius1 = $_REQUEST["b"];

$suma = $skaicius + $skaicius1;
$atimtis = $skaicius - $skaicius1;
echo "Skaiciu suma $suma ; skaicius skirtumas $atimtis";
?>
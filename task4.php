<html>
<head>
</head>
<body>
<?php
include("Fragments/menu.php");
function suma($ag, $bs){
    echo "$ag ir $bs suma yra: " . ($ag + $bs);
}

function atimtis($af, $bf){
    echo "$af ir $bf skirtumas yra: " . ($af - $bf);
}

if (isset($_REQUEST["a"]) && isset($_REQUEST["b"])){
    $a = $_REQUEST["a"];
    $b = $_REQUEST["b"];
suma($a, $b) ;
echo "<br>";
atimtis($a, $b);
}
?>
</body>
</html>

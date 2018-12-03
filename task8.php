<html>
<head>
</head>
<body>
<?php
include("Fragments/menu.php");
function skaiciavimas($a, $b){
    $vidurkis = (($b * 100) / $a);
    echo "kai nuvaziuotas atstumas yra $a ir yra sunaudota litru $b, vidurkis gaunasi: $vidurkis";
}


function ivestis()
{
    if (isset($_REQUEST["litrai"]) && isset($_REQUEST["kilometrai"])) {
        $a = $_REQUEST["kilometrai"];
        $b = $_REQUEST["litrai"];
        skaiciavimas($a, $b);
    }
}
ivestis();
?>
</body>
</html>
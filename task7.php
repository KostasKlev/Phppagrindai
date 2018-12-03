
<html>
<head>
</head>
<body>
<?php
include("Fragments/menu.php");
function vidurkis($a, $b){
       return $b *100/ $a;
    }

if (isset($_REQUEST["litrai"]) && isset($_REQUEST["kilometrai"])) {
    $a = $_REQUEST["kilometrai"];
    $b = $_REQUEST["litrai"];
    $vidurkis = vidurkis($a, $b);
    echo"kai nuvaziuotas atstumas yra $a ir yra sunaudota litru $b, vidurkis gaunasi: $vidurkis";
}
?>
</body>
</html>

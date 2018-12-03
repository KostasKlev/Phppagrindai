<html>
<head>
</head>
<body>
<?php
include("Fragments/menu.php");
function kmi($a, $b){
       return $b / pow($a, 2);
    }

if (isset($_REQUEST["ugis"]) && isset($_REQUEST["svoris"])) {
    $a = $_REQUEST["ugis"];
    $b = $_REQUEST["svoris"];
    $kmi = kmi($a, $b);
    echo"kai ugis yra" .$a. "ir svoris yra" .$b. "kmi gaunasi:" .$kmi;
}
?>
</body>
</html>

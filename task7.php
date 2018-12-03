
<html>
<head>
</head>
<body>
<?php
include("Fragments/menu.php");

if (isset($_REQUEST["litrai"]) && isset($_REQUEST["kilometrai"])) {
    $a = $_REQUEST["kilometrai"];
    $b = $_REQUEST["litrai"];
    echo"kai nuvaziuotas atstumas yra $a ir yra sunaudota litru $b, vidurkis gaunasi:" .(($b *100)/$a);
}
?>
</body>
</html>

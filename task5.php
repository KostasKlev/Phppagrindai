<html>
<head>
</head>
<body>
<?php
include("Fragments/menu.php");
if (isset($_REQUEST["ugis"]) && isset($_REQUEST["svoris"])) {
    $a = $_REQUEST["ugis"];
    $b = $_REQUEST["svoris"];
    echo "Jusu ugis:" . $a . "jusu svoris:" .$b. "jusu kmi:" .($b/($a * $a));
}
?>
</body>
</html>

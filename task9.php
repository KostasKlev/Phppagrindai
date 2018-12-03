<html>
<head>
</head>
<body>
<?php
include("Fragments/menu.php");
function rezultatas(){
    $GLOBALS["litrai"] = $_REQUEST["litrai"];
    $GLOBALS["kilometrai"] =$_REQUEST["kilometrai"];
}
function vidurkis(){
    $GLOBALS["vidurkis"]=($GLOBALS["litrai"]*100/$GLOBALS["kilometrai"]);
}
rezultatas();
vidurkis();
echo "Kuro sanaudotas kiekis:".$GLOBALS["litrai"]."L.nuvaziuotas atstumas:".$GLOBALS["kilometrai"]."km.Vidurkis lygus:".$GLOBALS["vidurkis"]."l.";

?>
</body>
</html>
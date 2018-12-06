<html>
<head>
    <style>
        <?php
session_start();
        include("../Fragments/style.css");

        ?>
    </style>
</head>
<body>
<?php
include("../Fragments/menu2.php");
?>
<p>Sukurti puslapį, kuris paprašytų vartotojo įvesti žodį ir jį atvaizduotų, jei vartotojas įveda žodį "pabaiga"
    puslapis parodo visus įvestus žodžius.</p>
<form action="#" method="get">
    <input type="text" name="zodis"><br>
    <input type="checkbox" name="clean">Valyti sesija <br>
    <input type="submit">
</form>
<?php
if (!isset($_SESSION["sakinys"])) {
    $_SESSION["sakinys"] = "";
}
if (isset($_REQUEST["zodis"])) {
    echo "<atsakymas>";
    $zodis = $_REQUEST["zodis"];
    // va cia sudeti logika
    if ($zodis != "pabaiga") {
        $_SESSION["sakinys"] .= "$zodis ";
        echo $zodis;
    } else {
        echo $_SESSION["sakinys"];
    }
    echo "</atsakymas>";
}
if (isset($_REQUEST["clean"]) && $_REQUEST["clean"] == "on") {
    $_SESSION["sakinys"] = "";
}
?>
</body>
</html>
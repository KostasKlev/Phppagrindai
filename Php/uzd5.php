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
    <input type="text" name="sk"><br>
    <input type="submit">
</form>
<?php
if (!isset($_SESSION["suma"])) {
    $_SESSION["suma"] = 0;
}
if (isset($_REQUEST["sk"])) {
    echo "<atsakymas>";
    if (is_numeric($_REQUEST["sk"])) {
        $sk = floatval($_REQUEST["sk"]);
        if ($sk != 0) {
            $_SESSION["suma"] += $sk;
            echo $sk;
        } else {
            echo "suma: " . $_SESSION["suma"];
            $_SESSION["suma"] = 0;
        }
    } else {
        echo "Tevai ka dirbi reikia vesti skaicius";
    }
    echo "</atsakymas>";
}
?>
</body>
</html>
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
<p>Sukurti puslapį, kuris paprašytų vartotojo įvesti žodžius atskirtus kableliais. Paspaudus submit, įvesti žodžiai turi
    būti atvaizduojami, kiekvienas žodis naujoje eilutėje
    Hint: "a,b".split(",") duoda ["a","b"], php: 💣.</p>
<form action="#" method="get">
    <input type="text" name="zodziai"><br>
    <input type="submit">
</form>
<?php
if (!isset($_REQUEST["zodziai"])) {
    echo "<atsakymas>";
    $zodziai = $_REQUEST["zodziai"];
    $masyvas = explode(",", $zodziai);

    foreach ($masyvas as $kaliosikas) {
        echo "$kaliosikas <br>";

    }
    echo "</atsakymas>";
}

?>
</body>
</html>
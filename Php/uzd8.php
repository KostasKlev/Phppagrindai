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
    <input type="text" name="sk"><br>
    <input type="submit">
</form>
<?php
if(isset($_REQUEST["skaiciai"])) {
    echo "<atsakymas>";
    $masyvas = explode(",", $_REQUEST["skaiciai"]);
    foreach ($masyvas as $kaliosikas) {
        if ($sk > 100) {
            echo "$sk <br>";
        }
    }
    echo "</atsakymas>";
}

?>
</body>
</html>
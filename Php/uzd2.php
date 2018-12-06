<html>
<head>
    <style>
        <?php
        include("../Fragments/style.css");

        ?>
    </style>
</head>
<body>
<?php
include("../Fragments/menu2.php");
?>
<form action="#" method="get">
    <input type="text" name="sk">
    <input type="submit">
</form>
<?php

if (isset ($_REQUEST["sk"])) {
    echo "<atsakymas>";


    $skaicius = $_REQUEST["sk"];
    if ($skaicius % 3 == 0) {
        echo "$skaicius dalijasi is 3"."<br>";
    }
    if ($skaicius % 5 == 0) {
        echo "$skaicius dalijasi is 5"."<br>";
    }
    if ($skaicius % 7 == 0) {
        echo "$skaicius dalijasi is 7";
    }



    echo "</atsakymas>";
}
?>
</body>
</html>
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
<form action="uzd1.php" method="get">
    <input type="text" name="sk">
    <input type="submit">
</form>
<?php

if (isset ($_REQUEST["sk"])) {
    echo "<atsakymas>";


    $skaicius = $_REQUEST["sk"];
    if ($skaicius % 2 == 0) {
        echo "$skaicius yra lyginis";
    } else {
        echo "$skaicius yra nelyginis";
    }

    echo "</atsakymas>";
}
?>
</body>
</html>
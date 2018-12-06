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
include("../Fragments/menu3.php");
?>
<p>
    PHP gauna du kintamuosius: atstumas kilometrais ir sąnaudos litrais,
    apskaičiuoti kiek vidutiniškai sunaudojama kuro 100tui kilometrų pagal formulę:

</p>
<div>
    vidurkis = litrai * 100 / atstumo
</div>
<atsakymas>
    <?php
    class Task7{
        private $atstumas;
        private $litrai;
        private $vidurkis;
        public function setValues($atstumas, $litrai){
            $this->litrai = $litrai;
            $this->atstumas = $atstumas;
            $this->calAvrg();
        }
        private function calAvrg(){
            $this->vidurkis = ($this->litrai * 100) / $this->atstumas;
        }
        public function showResult(){
            echo "Nuvaziavus $this->atstumas ir suvartojus $this->litrai, vidurkis 100 km gaunasi $this->vidurkis";
        }
    }
    if (isset($_REQUEST["atstumas"]) && isset($_REQUEST["litrai"])) {
        $atstumas = $_REQUEST["atstumas"];
        $litrai = $_REQUEST["litrai"];
        $obj = new Task7();
        $obj->setValues($litrai, $atstumas);
        $obj->showResult();

    }
    ?>

</atsakymas>

</body>
</html>
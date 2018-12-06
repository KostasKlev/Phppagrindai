
<html>
<head>
    <?php
    include("Fragments/styles.css");
    ?>
</head>
<body>
<?php
include("Fragments/menu3.php");
?>
<p>PHP gauna du kintamuosius: ūgis metrais ir svoris kilogramais išvesti kūno masės indeksą pagal formulę
<div>KMI = svoris/(ugis*ugis)</div>
</p>
<atsakymas>
    <?php
   class task5{
        private $ugis;
        private $svoris;
        private $kmi;
        public function setValues ($value1, $value2 ){
            $this->ugis = $value1;
            $this->svoris = $value2;
            $this->calKmi();
        }
        private function calKmi(){
            $this->kmi = $this->svoris / pow($this->ugis, 2);
        }
        public function showatsakymas(){
            echo "Kai ugis yra $this->ugis ir svorys ira $this->svoris, KMI gaunasi: $this->kmi";
        }
    }
    if (isset($_REQUEST["ugis"]) && isset($_REQUEST["svoris"])) {
        $ugis = $_REQUEST["ugis"];
        $svoris = $_REQUEST["svoris"];

        $obj = new task5();
        $obj->setValues($ugis, $svoris);



    }
    ?>
</atsakymas>
</body>
</html>
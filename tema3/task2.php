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

<?php
class task2{
    private $zodis;
    private $ilgis;

    /**
     * @return mixed
     */
    public function doAction($value)
    {
        $this->zodis = $value;
        $this->ilgis = strlen($this->zodis);
        echo "ivestas" . $this->zodis . "turi" . $this->ilgis . "simboliu";
    }
}
if(isset($_REQUEST["zodis"])) {
    $zodis = $_REQUEST["zodis"];
    $obj = new task2();
    $obj->doAction($zodis);
}
?>


</body>
</html>
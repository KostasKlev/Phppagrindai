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
class Task1{
    private $vardas;
    public function spausdink5kartus($value)
    {
        $this->vardas = $value;
        echo "$this->vardas<br>";
        echo "$this->vardas<br>";
        echo "$this->vardas<br>";
        echo "$this->vardas<br>";
        echo "$this->vardas<br>";
    }
}
if(isset($_REQUEST["name"])){
    $name = $_REQUEST["name"];
    $obj = new Task1();
    $obj->spausdink5kartus($name);
}
?>
</body>
</html>
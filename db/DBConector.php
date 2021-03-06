<?php
/**
 * Created by PhpStorm.
 * User: Kostas
 * Date: 2018-12-06
 * Time: 14:30
 */

class DBConector
{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "kcs";
    private $conn;
    function __construct()
    {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->db);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
    public function printAnyTable($result)
    {
        if ($result->num_rows > 0) {
            // output data of each row
            echo "<table>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                foreach ($row as $key => $value) {
                    echo "<td>$value</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
    }
    // CRUD Read all dalis
    public function getAllStudents()
    {
        $q = "SELECT * FROM `students`;";
        return $this->conn->query($q);
    }
    // CRUD read 1 dalis
    public function getStudentByID($id)
    {
        $q = "SELECT * FROM `students` WHERE `id` = ?";
        $stmt = $this->conn->prepare($q);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result();
    }
    // CRUD Create dalis
    public function addStudent($name, $surname, $phone, $email)
    {
        $q = "INSERT INTO `students` ( `name`, `surname`, `phone`, `email`) VALUES ( ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($q);
        $stmt->bind_param("ssss", $name, $surname, $phone, $email);
        $stmt->execute();
    }
    // CRUD Delete dalis
    public function deleteStudent($id)
    {
        $q = "DELETE FROM `students` WHERE `students`.`id` = ?";
        $stmt = $this->conn->prepare($q);
        $stmt->bind_param("i", $id);
        $stmt->execute();
    }
    // CRUD update dalis
    public function updateStudent($id, $name, $surname, $phone, $email)
    {
        $q = "UPDATE `students` SET `name` = ?,`surname` = ?,`phone` = ?,`email` = ? WHERE `id` = ?;";
        $stmt = $this->conn->prepare($q);
        $stmt->bind_param("ssssi", $name, $surname, $phone, $email, $id);
        $stmt->execute();
    }

    public function getUzduotis1()
    {
        $q = "SELECT * FROM `students` ORDER BY `name` ASC;";
        return $this->conn->query($q);
    }
    public function getUzduotis2()
    {
        $q = "SELECT * FROM `students` WHERE `name` LIKE '%as' AND `surname` LIKE '%as' ORDER BY `surname` DESC ;";
        return $this->conn->query($q);
    }
    public function getUzduotis3()
    {
        $q = "SELECT * FROM `students_address` WHERE `city` = 'Kaunas';";
        return $this->conn->query($q);
    }
    public function getUzduotis4()
    {
        $q = "SELECT * FROM `students_address` WHERE `postcode` IS NOT NULL;";
        return $this->conn->query($q);
    }
    public function getUzduotis5()
    {
        $q = "SELECT * FROM `students_address` WHERE `postcode` IS NOT NULL;";
        return $this->conn->query($q);
    }
    public function getUzduotis6()
    {
        $q = "SELECT * FROM `students_marks` ORDER BY `mark` DESC;";
        return $this->conn->query($q);
    }

}

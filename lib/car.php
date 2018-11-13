<?php
include_once ('C:\xampp\htdocs\online-transport\config\database.php');
class Car{
    public $id;
    public $name;
    public $createdAt;
    private $db;

    public function __construct()
    {
        $this->db = new database();
    }

    public function getAllCar(){
        $query ="SELECT * FROM `car`";
        $stmt = $this->db->pdo->prepare($query);
        $stmt->execute();
        if($stmt){
            $allData = $stmt->fetchAll(PDO::FETCH_CLASS, "car");
            return $allData;
        } else{
            return false;
        }
    }
    public function createCar($data){
        $name = $data['name'];
        $description = $data['description'];
        if(empty($name)){
            return false;
        }else {
            $sql = "INSERT INTO `car` (`id`, `name`, `description`, `createdAt`) VALUES (NULL, '".$name."', '".$description."', CURRENT_TIMESTAMP);";
            return $this->db->pdo->exec($sql);
        }

    }

    public function viewCarById($id){
        $sql = "SELECT * FROM `car` WHERE `id` = ".$id."";
        $stmt = $this->db->pdo->query($sql);
        if ($stmt){
            return $stmt->fetchAll(PDO::FETCH_CLASS, 'car');
        } else{
            return 'False';
        }
    }

    public function updateCar($data, $id){
        $name = $data['name'];
        $description = $data['description'];
        $sql = "UPDATE `car` SET `name` = '".$name."', `description` = '".$description."' WHERE `car`.`id` = ".$id."";
        return $this->db->pdo->exec($sql);

    }
    public function deleteCar($id){
        $sql = "DELETE FROM `car` WHERE `car`.`id` = ".$id."";
        if ($this->db->pdo->exec($sql)){
            return  "SuccessFully Delete";
        }else{
            return "Delete Unsuccessful";
        }
    }
}
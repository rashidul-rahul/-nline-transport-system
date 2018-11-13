<?php
include_once ('C:\xampp\htdocs\online-transport\config\database.php');
class admin
{
    public  $id;
    public $name;
    public $email;
    public $userName;
    private $password;
    public $createdAt;
    private $db;

    public function __construct()
    {
        $this->db = new database();
    }

    public function createAdmin($data){
        $name = $data['name'];
        $userName = $data['userName'];
        $email = $data['email'];
        $password = md5($data['password']);

        $sql = "INSERT INTO `admin` (`id`, `name`, `userName`, `email`, `password`, `createdAt`) VALUES (NULL, '".$name."', '".$userName."', '".$email."', '".$password."', CURRENT_TIMESTAMP);";
        return $this->db->pdo->exec($sql);
    }

    public function adminLogin($data){
        $userName = $data['userName'];
        $password = md5($data['password']);
        $sql = "SELECT * FROM `admin` WHERE admin.userName = '".$userName."' AND admin.password = '".$password."'";
        $stmt = $this->db->pdo->query($sql);
        $data =  $stmt->fetchAll(PDO::FETCH_OBJ);
        if($data == null){
            return false;
        }else{
            return $data;
        }
    }

    public function viewAllAdmin(){
        $sql = "SELECT * FROM `admin`";
        $stmt = $this->db->pdo->query($sql);
        if ($stmt){
            return $stmt->fetchAll(PDO::FETCH_CLASS, 'admin');
        } else{
            return 'False';
        }
    }

    public function viewAdminByID($id){
        $sql = "SELECT * FROM `admin` WHERE `id` = ".$id."";
        $stmt = $this->db->pdo->query($sql);
        if ($stmt){
            return $stmt->fetchAll(PDO::FETCH_CLASS, 'admin');
        } else{
            return 'False';
        }
    }
    public function updateAdminById($data, $id){
        $name = $data['name'];
        $email = $data['email'];
        $userName = $data['userName'];
        $sql = "UPDATE `admin` SET `name` = '".$name."', `userName` = '".$userName."', `email` = '".$email."' WHERE `admin`.`id` = ".$id."";
        return $this->db->pdo->exec($sql);

    }

    public function deleteAdminById($id){
        $sql = "DELETE FROM `admin` WHERE `admin`.`id` = ".$id."";
        if ($this->db->pdo->exec($sql)){
            return  "SuccessFully Delete";
        }else{
            return "Delete Unsuccessful";
        }
    }
}
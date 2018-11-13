<?php
include_once ('C:\xampp\htdocs\online-transport\config\database.php');
//include_once ('session.php');
class User
{
    public $id;
    public $name;
    public $userName;
    public $email;
    public $phone;
    public $image;
    private $password;
    public $createdAt;
    private $db;

    public  function __construct(){
        $this->db = new database();
    }

    public  function userRegistration($data, $image){
        $name = $data['fullName'];
        $userName = $data['userName'];
        $phone = $data['phone'];
        $email = $data['email'];
        $password = md5($data['password']);
        $upload  = $image;

        $sql = "INSERT INTO `user` (`id`, `name`, `userName`, `email`, `phone`, `image`, `password`, `createdAt`) VALUES (NULL, '".$name."', '".$userName."', '".$email."', '".$phone."', '".$upload."', '".$password."', CURRENT_TIMESTAMP);";
        return $this->db->pdo->exec($sql);
    }

    public function userLogin($data){
        $userName = $data['userName'];
        $password = md5($data['password']);
        $sql = "SELECT * FROM `user` WHERE user.userName = '".$userName."' AND user.password = '".$password."'";
        $stmt = $this->db->pdo->query($sql);
        $value  = $stmt->fetchAll(PDO::FETCH_OBJ);
        if ($value == null){
            return false;
        } else{
            return $value;
        }
    }

    public function allUser(){
        $sql = "SELECT * FROM `user`";
        $stmt = $this->db->pdo->query($sql);
        if ($stmt){
            return $stmt->fetchAll(PDO::FETCH_CLASS, 'User');
        } else{
            return 'False';
        }

    }
    public function viewUserByID($id){
        $sql = "SELECT * FROM `user` WHERE `id` = ".$id."";
        $stmt = $this->db->pdo->query($sql);
        if ($stmt){
            return $stmt->fetchAll(PDO::FETCH_CLASS, 'User');
        } else{
            return 'False';
        }
    }

    public function updateUser($data, $id){
        $name = $data['fullName'];
        $userName = $data['userName'];
        $email = $data['email'];
        $phone  = $data['phone'];
        $sql = "UPDATE `user` SET `name` = '".$name."', `phone` = '".$phone."', `userName` = '".$userName."', `email` = '".$email."' WHERE `user`.`id` = ".$id.";";
        return $this->db->pdo->exec($sql);

    }
    public function deleteUser($id){
        $sql = "DELETE FROM `user` WHERE `user`.`id` = ".$id."";
        if ($this->db->pdo->exec($sql)){
            return  "SuccessFully Delete";
        }else{
            return "Delete Unsuccessful";
        }
    }
}
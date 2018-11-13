<?php
/**
 * Created by PhpStorm.
 * User: akpab
 * Date: 10/11/2018
 * Time: 14:30
 */
include_once ('C:\xampp\htdocs\online-transport\config\database.php');

class Post
{
    public $id;
    public $userId;
    public $location;
    public $name;
    public $carId;
    public $title;
    public $phone;
    public $description;
    public $image;
    public $createdAt;
    private $db;

    public  function __construct(){
        $this->db = new database();
    }

    public  function createPost($data, $image){
        $title = $data['title'];
        $description = $data['details'];
        $userId =$data['userId'];
        $carId =  $data['carId'];
        $location = $data['location'];
        $phone = $data['phone'];
        $upload  = $image;

        $sql = "INSERT INTO `post` (`id`, `userId`, `location`, `carId`, `title`, `description`, `image`, `phone`, `createdAt`) VALUES (NULL, '".$userId."', '".$location."', '".$carId."', '".$title."', '".$description."', '".$upload."', '".$phone."', CURRENT_TIMESTAMP)";
        return $this->db->pdo->exec($sql);
    }


    public function allPost(){
        $sql = "SELECT * FROM `post`";
        $stmt = $this->db->pdo->query($sql);
        if ($stmt){
            return $stmt->fetchAll(PDO::FETCH_CLASS, 'Post');
        } else{
            return 'False';
        }

    }
    public function viewPostById($id){
        $sql = "SELECT * FROM `post` WHERE `id` = ".$id."";
        $stmt = $this->db->pdo->query($sql);
        if ($stmt){
            return $stmt->fetchAll(PDO::FETCH_CLASS, 'Post');
        } else{
            return 'False';
        }
    }

    public function viewPostByUserId($userId){
        $sql = "SELECT * FROM `post` WHERE post.userId = ".$userId."";
        $stmt = $this->db->pdo->query($sql);
        if ($stmt){
            return $stmt->fetchAll(PDO::FETCH_CLASS, 'Post');
        } else{
            return 'False';
        }
    }

    public function updatePost($data, $id){
        $title = $data['title'];
        $phone = $data['phone'];
        $location = $data['location'];
        $description  = $data['details'];
        $sql = "UPDATE `post` SET `location` = '".$location."', `title` = '".$title."', `phone` = '".$phone."', `description` = '".$description."' WHERE `post`.`id` = ".$id.";";
        return $this->db->pdo->exec($sql);

    }
    public function deletePost($id){
        $sql = "DELETE FROM `post` WHERE `post`.`id` = ".$id."";
        return $this->db->pdo->exec($sql);
    }
}
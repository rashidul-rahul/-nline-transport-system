<?php


class database
{
    private $host="localhost";
    private $userName="root";
    private $password="";
    private $dbname="online-transport";
    public $pdo;

    public function __construct(){
        if(!isset($this->pdo)){
            try{
                $link = new PDO("mysql:hostname=".$this->host.";dbname=".$this->dbname."","$this->userName", "$this->password",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'") );
                $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->pdo = $link;
            }catch (PDOException $e){
                die("Field to connect database".$e->getMessage());
            }
        }
    }
}
?>
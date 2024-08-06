<?php
namespace App\Commom;
use PDO;
use PDOException;
class Database  {
    public $pdo;
    public function __construct(){
        $host='localhost';
        $db_name='php_mvc';
        $pass='';
        $user='root';
        $port='3306';
        $dsn="mysql:host=$host;dbname=$db_name;port=$port;charset=UTF8";
        try {
            $this->pdo=new PDO($dsn,$user,$pass);
            if($this->pdo){
                $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
                // echo'connect successfully';
            }
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
     }
}




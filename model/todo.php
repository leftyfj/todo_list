<?php
var_dump('here is todo.php ');

require_once '../config/config.php';
// require(dirname(__FILE__)."../config/config.php");

var_dump('read config '); exit;
  class Todo {
    public $db;

    public function __construct() {
      //DB接続
      // $dsn = 'mysql:host=DB_HOST;dbname=DB_NAME;charset=utf8';
      $dsn = sprintf('mysql:host=%s;dbname=%s;charset=uft8', DB_HOST, DB_NAME);

      echo '$dsnの値～'.var_dump($dsn);
      try{
        $this->$db = new PDO($dsn, DB_USER, DB_PASSWD);
        echo('接続できました');
        } catch (PDOException $e) {
        die("接続できませんでした:{$e->getMessage()}");
        }

    }

    public function getAll(){
      $sql = "SELECT * FROM todos ORDER BY deadline";
      $stmt = $this->$db->query($sql);
      return $stmt->fetch(PDO::FETCH_ASSOC);
    }
  }


 ?>

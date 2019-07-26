<?php
//var_dump('here is todo.php ');
//var_dump(DB_HOST);exit;

//require_once '../config/config.php';
// require(dirname(__FILE__)."../config/config.php");

//var_dump('read config '); exit;
  class Todo {
    public $db;

    public function __construct() {
      //DB接続
      // $dsn = 'mysql:host=DB_HOST;dbname=DB_NAME;charset=utf8';
      // var_dump(DB_HOST);
      // var_dump(DB_NAME);
      $dsn = sprintf('mysql:host=%s;dbname=%s;charset=utf8', DB_HOST, DB_NAME);

      //var_dump($dsn);exit;
      try{
        $this->$db = new PDO($dsn, DB_USER, DB_PASSWD);
        echo('接続できました');
        count($this);
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

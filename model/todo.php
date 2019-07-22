<?php

require_once '../config/config.php';
;
  public $db;

  class Todo {
    public $db;

    public function __construce() {
      //DB接続
      $dsn = 'mysql:host=DB_HOST;dbname=DB_NAME;charset=utf8';

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

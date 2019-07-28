<?php
  class Todo {
    public $db;

    public function __construct() {

      $dsn = sprintf('mysql:host=%s;dbname=%s;charset=utf8', DB_HOST, DB_NAME);

      try{
        $this->$db = new PDO($dsn, DB_USER, DB_PASSWD);
      } catch (PDOException $e) {
        die("接続できませんでした:{$e->getMessage()}");
      }

    }

    public function getAll(){
      $sql = "SELECT * FROM todos ORDER BY deadline";
      $stmt = $this->$db->query($sql);
      return $stmt->fetchall(PDO::FETCH_ASSOC);
      //return $stmt;
    }
  }


 ?>

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

    }

    public function regist($data) {
      //DB保存
      $stmt = $this->$db->prepare("INSERT INTO `todos`
      (`user_id`,`title`, `memo`, `priority`, `start`, `deadline`)
      VALUES (1000,:title, :memo, :priority, :start, :deadline)");

      $stmt->bindValue(':title', $data["title"]);
      $stmt->bindValue(':memo', $data["memo"]);
      $stmt->bindValue(':priority', $data["priory"]);
      $stmt->bindValue(':start', $data["start"]);
      $stmt->bindValue(':deadline', $data["deadline"]);
      // $stmt->bindValue(':project', $data["project"]);
      // $stmt->bindValue(':genre', $data["genre"]);
      // $stmt->bindValue(':tag', $data["tag"]);
      $flag = $stmt->execute();

    }
  }


 ?>

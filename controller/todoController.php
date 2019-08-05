<?php

class todoController {
    public $title;
    public $memo;
    public $priority;
    public $start;
    public $deadline;
    // public $project;
    // public $genre;
    // public $tag;
    function create() {
      $type = $_POST['type'];
      $title = $_POST['title'];
      $memo = $_POST['memo'];
      $priority = $_POST['priority'];
      $start = $_POST['start'];
      $deadline = $_POST['deadline'];
      // $project = $_POST['project'];
      // $genre = $_POST['genre'];
      // $tage = $_POST['tag'];

      //パラメータ取得
      // $this->title = $title;
      // $this->memo = $memo;
      // $this->priority = $priority;
      // $this->start = $start;
      // $this->deadline = $deadline;

      //取得した値を配列に格納
      $data = array(
              "title" => $title,
              "memo" => $memo,
              "priority" => $priority,
              "start" => $start,
              "deadline" => $deadline,
          );

      var_dump($data);
      //DB保存
      $todo = new Todo;
      $todo -> regist($data);

      //complete.phpへリダイレクトする
      header('Location:complete.php');

    }
};


?>

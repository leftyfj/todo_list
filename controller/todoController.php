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
    function create($title,$memo,$priority,$start,$deadline) {
      //パラメータ取得
      $this->title = $title;
      $this->memo = $memo;
      $this->priority = $priority;
      $this->start = $start;
      $this->deadline = $deadline;

      //取得した値を配列に格納
      $data = array(
              'title' => $this->title,
              "memo" => $this->memo,
              "priority" => $this->priority,
              "start" => $this->start,
              "deadline" => $this->deadline
          );

      //DB保存
      $todo = new Todo;
      $todo -> regist($data);

      //complete.phpへリダイレクトする
      header('Location:complete.php');

    }
};


?>

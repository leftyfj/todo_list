<?php

require_once './../../config/config.php';
require_once './../../model/todo.php';

$todo = new Todo;

$todo_list = $todo->getAll();

?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>Todo List | Todo一覧</title>
    <link rel="stylesheet" type="text/css" href="./../../css/style.css">
  </head>
  <body>
    <main>
      <h1>TODO 一覧</h1>
      <article>
          <hr />
          <?php foreach ($todo_list as $todo):?>
            <p class="title">
              <input type="checkbox" name="todo">
              <?php print($todo['title']);?>
            </p>
            <p class="memo"><?php if (!is_null($todo['memo'])){
            print("メモ：".$todo['memo']);
            }?></p>
            <p class="items"><?php print('期日:'.$todo['deadline']);?>
              <?php print('ジャンル:'.$todo['genre_id']);?>
            </p>
            <hr>
          <?php endforeach;?>
      </article>
  <?php
    unset($db);
   ?>
      <a href="./new.php">タスク新規登録</a>
    </main>
  </body>
</html>

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
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="./../../css/style2.css">
  </head>
  <body id="main">
    <div class="container">
      <header>
        <h1>タスク 一覧</h1>
      </header>
    </div> <!--container-->
    <hr>
    <div class="container">
      <div class="row">
        <div class="col-md-2">
            <p><a href="./new.php">タスク新規登録</a></p>
        </div> <!--col-md-2-->
        <div class="col-md-10 ">

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
            <hr style="border-width:1px;">
          <?php endforeach;?>
        </div> <!--col-md-10-->
      </div> <!--row-->

  <?php
    unset($db);
   ?>

    </div><!--container-->
    <hr />
  </body>
</html>

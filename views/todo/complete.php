<?php

require_once './../../config/config.php';
require_once './../../model/todo.php';
require_once './../../controller/todoController.php';

$type = $_POST['type'];
$title = $_POST['title'];
$memo = $_POST['memo'];
$priority = $_POST['priority'];
$start = $_POST['start'];
$deadline = $_POST['deadline'];
// $project = $_POST['project'];
// $genre = $_POST['genre'];
// $tage = $_POST['tag'];

if(isset($type) && $type = 'new'){
  $class = new todoController;
  $class -> create($title,$memo,$priority,$start,$deadline);
}


?>
<html>
  <head>
    <title>登録完了</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>

<body>
    <p>ユーザー登録できました</p>
</body>
<a href="new.php">タスク登録へ戻る</a>
</html>

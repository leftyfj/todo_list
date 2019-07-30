<?php
require_once './../../config/config.php';
require_once './../../model/todo.php';


$todo = new Todo;

$stmt = $todo->$db->prepare("INSERT INTO `todos` (`user_id`,`title`, `memo`, `priority`, `start`, `deadline`) VALUES (1000,:title, :memo, :priority, :start, :deadline)");
$stmt->bindValue(':title', $_POST["title"]);
$stmt->bindValue(':memo', $_POST["memo"]);
$stmt->bindValue(':priority', $_POST["priory"]);
$stmt->bindValue(':start', $_POST["start"]);
$stmt->bindValue(':deadline', $_POST["deadline"]);
// $stmt->bindValue(':project', $_POST["project"]);
// $stmt->bindValue(':genre', $_POST["genre"]);
// $stmt->bindValue(':tag', $_POST["tag"]);
$flag = $stmt->execute();

unset($db);

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
<a href="new.html">タスク登録へ戻る</a>
</html>

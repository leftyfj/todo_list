<?php
require_once './../../config/config.php';
require_once './../../model/todo.php';
$todo = new Todo;

$stmt = $todo->$db->prepare("INSERT INTO users (username, user_password,created_at) VALUES (:username, :user_password, CURRENT_TIMESTAMP())");

$stmt->bindValue(':username', $_POST["username"]);
$stmt->bindValue(':user_password', $_POST["user_password"]);
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
<a href="register.html">ユーザー登録へ戻る</a>
</html>


<?php
/*
  header("Location: register.html");

  exit;
   */
 ?>

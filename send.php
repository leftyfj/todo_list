<?php
require_once 'config/config.php';
$db = getDb();

$stmt = $db->prepare("INSERT INTO users (username, user_password,created_at) VALUES (:username, :user_password, CURRENT_TIMESTAMP())");

$stmt->bindValue(':username', $_POST["username"]);
$stmt->bindValue(':user_password', $_POST["user_password"]);
$flag = $stmt->execute();

unset($db);

header("Location: register.html");
exit;
?>

<html>
  <head>
    <title>登録完了</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  </head>
<body>
    <p>ユーザー登録できました</p>
</body>
</html>






header("Location: index.php");

exit;

?>

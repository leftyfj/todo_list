<?php
require_once 'config/config.php';
$db = getDb();

$stmt = $db->prepare("INSERT INTO users (username, user_password,created_at) VALUES (:username, :user_password, CURRENT_TIMESTAMP())");

$stmt->bindValue(':username', $_POST["username"]);
$stmt->bindValue(':user_password', $_POST["user_password"]);
$flag = $stmt->execute();

unset($db);


?>

<html>
  <head>
    <title>登録完了</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  </head>
  <style media="screen">
    body {
      background-image: url(images/bg_content.png);
      /* 画像を常に天地左右の中央に配置 */
      background-position: center center;

      /* 画像をタイル状に繰り返し表示しない */
      background-repeat: no-repeat;

      /* コンテンツの高さが画像の高さより大きい時、動かないように固定 */
      background-attachment: fixed;

      /* 表示するコンテナの大きさに基づいて、背景画像を調整 */
      background-size: cover;

      /* 背景画像が読み込まれる前に表示される背景のカラー */
      background-color: #464646;
    }
    h1 {font-size:20px;}
  </style>
<body>
    <p>ユーザー登録できました</p>
</body>
</html>


<?php
/*
  header("Location: register.html");

  exit;
   */
 ?>

<html>
  <head>
    <title>新規ユーザー登録(確認)</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type="text/css" href="css/main.css">
  </head>
  <body>
    <h1>入力内容をご確認下さい。<br /><br /></h1>
    <form action="send.php" method="post">
      <?php
        echo "ユーザーネーム：".$_POST['username']."<br />";
        echo "パスワード：".$_POST['user_password']."<br />";
      ?>
      <input type="hidden" name="username" value="<?php echo $_POST['username'] ?>" />
      <input type="hidden" name="user_password" value="<?php echo $_POST['user_password'] ?>" />
      <input type="submit" value="送信" />
    </form>
  </body>

</html>

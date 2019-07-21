<html>
  <head>
    <title>新規ユーザー登録(確認)</title>
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

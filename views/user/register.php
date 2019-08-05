<html>
  <head>
    <title>新規ユーザー登録(確認)</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
        <h1>入力内容をご確認下さい</h1>
      </header>
    </div> <!--container-->
    <hr>
    <div class="container">
    <form action="send.php" method="post" >
      <?php
        echo "ユーザーネーム：".$_POST['username']."<br />";
        echo "パスワード：".$_POST['user_password']."<br />";
      ?>
      <p>
        ユーザーネーム
      </p>
      <input type="hidden" name="username" value="<?php echo $_POST['username'] ?>" />
      <input type="hidden" name="user_password" value="<?php echo $_POST['user_password'] ?>" />
      <input type="submit" value="登録" class="btn btn-primary btn-block"/>
    </form>
  </div><!--container-->
  <hr />
  </body>

</html>

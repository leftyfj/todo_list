<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>Todo List | Todo新規入力</title>
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
        <div class="row">
            <div class="col-sm-6"><h1>新しいタスクを入力してください</h1></div>
            <div class="col-sm-6 align-right"><a href="index.php">タスク一覧へ</a></div>
        </div>
          
      </header>
    </div> <!--container-->
    <hr class="header_footer">

    <div class="container">
        <div class="row">
          <div class="col-md-2">
            <a href="index.php">タスク一覧</a>
          </div> <!--col-md-2-->
          <div class="col-md-10 ">
            <form action="./complete.php" method="post" name="todos" class="panel panel-default panel-body">
              <input type="hidden" name="type" value="new" />
            <div class="form-group">
              <input class="form-control" type="text" name="title" placeholder="タイトル"/>
            </div>
            <div class="form-group">
              <input class="form-control" type="text" name="memo" placeholder="メモ"/>
            </div>
            <div class="form-group">
              <p>優先度&nbsp;
              <input class="custom-control-input" type="radio" name="priority" value="１" checked> １（最重要)
              <input class="custom-control-input" type="radio" name="priority" value="2"> ２
              <input class="custom-control-input" type="radio" name="priority" value="3"> ３
              </p>
            </div> <!--radio-->
          
            <div class="form-group">
              <input class="form-control" type="text" name="start" placeholder="開始  2019/01/01"/>
            </div>
            <div class="form-group">
              <input class="form-control" type="text" name="deadline" placeholder="期限  2019/12/31"/>
            </div>
            <div class="form-group">
             <input class="form-control" type="text" name="project" placeholder="プロジェクト"/>
            </div>
            <div class="form-group">
              <input class="form-control" type="text" name="genre" placeholder="ジャンル"/>
            </div>
            <div class="form-group">
              <input class="form-control" type="text" name="tag" placeholder="#タグ1,#タグ2,#タグ3"/>
            </div>
            <div class="form-group">
              <input type="submit" value="登録" class="btn btn-primary btn-block">
            </div>
            </form>
          </div> <!--col-md-10-->
        </div><!--row-->
    </div> <!--container-->
    <hr class="header_footer">  
  </body>
</html>
 <?php
       unset($db);
?>

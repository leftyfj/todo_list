<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>Todo List | Todo新規入力</title>
      <link rel="stylesheet" type="text/css" href="./../../css/style.css">
  </head>
  <body>
    <main>
      <h1>新しいタスクを入力してください</h1>
      <form action="./complete.php" method="post" name="todos">
        <input type="hidden" name="type" value="new" />
        <p><input type="text" name="title" placeholder="タイトル"/></p>
        <p><input type="text" name="memo" placeholder="メモ"/></p>
        <p>優先度
          <input type="radio" name="priority" value="１">１（最重要)
          <input type="radio" name="priority" value="2">２
          <input type="radio" name="priority" value="3">３
        </p>
        <p><input type="text" name="start" placeholder="開始  2019/01/01"/></p>
        <p><input type="text" name="deadline" placeholder="期限  2019/12/31"/></p>
        <p><input type="text" name="project" placeholder="プロジェクト"/></p>
        <p><input type="text" name="genre" placeholder="ジャンル"/></p>
        <p><input type="text" name="tag" placeholder="#タグ1,#タグ2,#タグ3"/></p>
        <p><input type="submit" value="登録" /></p>
      </form>
      <?php
        unset($db);
       ?>
    </main>
  </body>
</html>

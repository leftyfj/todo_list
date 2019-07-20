<?php
//PHPでDBのtodosテーブルからリストを取得
// $dsn = 'mysql:host=localhost;dbname=todo;charset=utf8';
// $user = 'root';
// $password = 'hisa59';
//
// try {
//   $db = new PDO($dsn, $user, $password);
//   //echo('接続に成功しました').PHP_EOL;
//
//   //$stmt = $db->prepare('SELECT * FROM todos');
//   $sql = "SELECT*FROM todos";
//   $stmt = $db->query($sql);
//
// } catch (PDOException $e) {
//   die("接続できませんでした:{$e->getMessage()}");
// }

require_once 'config/config.php';
$db = getDb();

$sql = "SELECT*FROM todos ORDER BY deadline";
$stmt = $db->query($sql);
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>Todo List</title>
  </head>
  <body>


<h1 style="font-size:20px">TODO 一覧</h1>
<table border="2" width="80%" align="center">
  <th bgcolor="#f0f8ff">id</th>
  <!-- <th bgcolor="#f0f8ff">use_id</th> -->
  <th bgcolor="#f0f8ff">TODO</th>
  <th bgcolor="#f0f8ff">メモ</th>
  <th bgcolor="#f0f8ff">優先度</th>
  <th bgcolor="#f0f8ff">開始日</th>
  <th bgcolor="#f0f8ff">期限</th>
  <th bgcolor="#f0f8ff">完了日</th>
  <th bgcolor="#f0f8ff">プロジェクト</th>
  <th bgcolor="#f0f8ff">ジャンル</th>
  <th bgcolor="#f0f8ff">タブ</th>
  </tr>
<?php
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    // echo "<td>".$row['user_id']."</td>";
    echo "<td>".$row['title']."</td>";
    echo "<td>".$row['memo']."</td>";
    echo "<td>".$row['priority']."</td>";
    echo "<td>".$row['start']."</td>";
    echo "<td>".$row['deadline']."</td>";
    echo "<td>".$row['completed']."</td>";
    echo "<td>".$row['project_id']."</td>";
    echo "<td>".$row['genre_id']."</td>";
    echo "<td>".$row['tag_id']."</td>";
    echo "</tr>";
  //  echo "</table>"
  }

  unset($db);
 ?>
</table>
  </body>
</html>

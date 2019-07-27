<?php

require_once './config/config.php';
require_once 'model/todo.php';

$todo = new Todo;

//$stmt = $todo->$db->query("SELECT * FROM todos ORDER BY deadline");
$stmt = $todo->getAll();
//$stmt->execute();
//var_dump('aaa');exit;

//
// $sql = "SELECT*FROM todos ORDER BY deadline";
// $stmt = $db->query($sql);
// $todos = $stmt->fetch(PDO::FETCH_ASSOC);

// $todo_list = $todo->getAll();
// $cnt =count($todo_list);
// echo $cnt; exit;
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>Todo List</title>
    <!-- <link rel="stylesheet" type="text/css" href="css/main.css"> -->
  </head>
  <body>


<h1>TODO 一覧</h1>
<table width="80%" align="center">
  <tr>
    <th bgcolor="#f0f8ff">id</th>
    <th align="left" bgcolor="#f0f8ff">TODO</th>
    <th align="left" bgcolor="#f0f8ff">メモ</th>
    <th align="center" bgcolor="#f0f8ff">優先度</th>
    <th align="center" bgcolor="#f0f8ff">開始日</th>
    <th align="center" bgcolor="#f0f8ff">期限</th>
    <th align="center" bgcolor="#f0f8ff">完了日</th>
    <th align="left" bgcolor="#f0f8ff">プロジェクト</th>
    <th align="left" bgcolor="#f0f8ff">ジャンル</th>
    <th align="left" bgcolor="#f0f8ff">タブ</th>
  </tr>
  <?php while($todo = $stmt->fetch(PDO::FETCH_ASSOC)):?>
  <tr>
    <td><?php echo $todo['id'];?></td>
    <td><?php echo $todo['title'];?></td>
    <td><?php echo $todo['memo'];?></td>
    <td><?php echo $todo['priority'];?></td>
    <td><?php echo $todo['start'];?></td>
    <td><?php echo $todo['deadline'];?></td>
    <td><?php echo $todo['project_id'];?></td>
    <td><?php echo $todo['genre_id'];?></td>
    <td><?php echo $todo['tag_id'];?></td>
  </tr>
<?php endwhile;?>
  </table>
 <?php //foreach ($todo_list as $todo):
   /*while($todo = $stmt->fetch(PDO::FETCH_ASSOC)){
     echo"<hr>{$todo['id']}:{$todo['title']}:{$todo['deadline']}";
   }

*/
?>


  <!-- // while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  //
  //   echo "<tr>";
  //   echo "<td>".$row['id']."</td>";
  //   // echo "<td>".$row['user_id']."</td>";
  //   echo "<td>".$row['title']."</td>";
  //   echo "<td>".$row['memo']."</td>";
  //   echo "<td>".$row['priority']."</td>";
  //   echo "<td>".$row['start']."</td>";
  //   echo "<td align='center'>".$row['deadline']."</td>";
  //   echo "<td>".$row['completed']."</td>";
  //   echo "<td>".$row['project_id']."</td>";
  //   echo "<td>".$row['genre_id']."</td>";
  //   echo "<td>".$row['tag_id']."</td>";
  //   echo "</tr>";
  // //  echo "</table>"
  // } -->
<?
  unset($db);
 ?>

  </body>
</html>

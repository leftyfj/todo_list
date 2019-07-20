<?php
function getDb(){
  $dsn = 'mysql:host=localhost;dbname=todo;charset=utf8';
  $user = 'root';
  $password = 'hisa59';

  try {
    $db = new PDO($dsn, $user, $password);
  } catch (PDOException $e) {
    die("接続できませんでした:{$e->getMessage()}");
  }

  return $db;
}
 ?>

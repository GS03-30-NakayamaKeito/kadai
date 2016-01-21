<?php
//1.  DB接続します
try {
  $pdo = new PDO('mysql:dbname=gskadai_1_16;host=localhost','root','');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

//2. DB文字コードを指定（固定）
$stmt = $pdo->query('SET NAMES utf8');
if (!$stmt) {
  $error = $pdo->errorInfo();
  exit("charError:".$error[2]);
}

//３．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gskadai_1_16_table");
$status = $stmt->execute();

//データ表示
$view="";
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
  //Selectデータの数だけ自動でループしてくれる
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .= $result["name"]."[".$result["indate"]."]<br>";
    $view .='<p><a href="edit.php?id='.$result["id"].'">'.$result["name"].'</a></p>';
  }
}
?>





<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ一覧</title>

</head>
<body>
<div class="container jumbotron"><?=$view?></div>


</body>
</html>

<?php
session_start();
include('func.php'); //外部ファイル読み込み（関数群）

//０．前ページとこのページのセッションIDを比較し、ログイン認証済みかを判定
//ログイン認証してなければ処理がここでストップする。
sessionCheck(); // include/func.php に記載

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
//$tr1="";
//$id="";
//$name="";
//$email="";
//$age="";
//$indate="";
//$tr2="";

if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
  //Selectデータの数だけ自動でループしてくれる
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    //$view .= $result["id"]."[".$result["indate"]."]<br>";
    //$view .='<p><a href="edit.php?id='.$result["id"].'">'.$result["name"].'</a></p>';
//    $tr1 = "<tr>";
//    $id = '<td>$result["id"]</td>';
//    $name = '<td>$result["name"]</td>';
//    $email = '<td>$result["email"]</td>';
//    $age = '<td>$result["age"]</td>';
//    $indate = '<td>$result["indate"]</td>';
//    $tr2 = "</tr>";
//    $view . = '<tr><td>'
//            .$result["id"].'</td><td>'
//            .$result["name"].'</td><td>'
//    .        $result["email"].'</td><td>'
//            .$result["age"].'</td><td>'
//            .$result["indate"].</td></tr>';
      $view .= '<tr><td><a href="edit.php?id='.$result['id'].'">'
                .$result['id']."</a></td><td>"
                .$result['email'].'</td><td>'
                .$result['name'].'</td><td>'
                .$result['age'].'</td><td>'
                .$result['indate'].'</td></tr>';
    
    
    
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
<!-- <div class="container jumbotron"><?=$view?></div> -->

<table border="1" width="500"> 
    <thead>
       <tr>
        <th bgcolor="#EE0000">ID</th>
        <th bgcolor="#EE0000" width="150">名前</th>
        <th bgcolor="#EE0000" width="200">email</th>
        <th bgcolor="#EE0000" width="200">年齢</th>
        <th bgcolor="#EE0000" width="200">登録日時</th>
        </tr>
    </thead>
    <tbody>
        <?=$view?>
    </tbody>
    
    
    
    <!--
    <?=$tr1?>
    <?=$id?>
    <?=$name?>
    <?=$email?>
    <?=$age?>
    <?=$indate?>
    <?=$tr2?>
    -->

</table>


</body>
</html>

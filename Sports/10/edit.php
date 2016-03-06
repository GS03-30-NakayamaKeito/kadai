<?php

session_start();
include('func.php'); //外部ファイル読み込み（関数群）

//０．前ページとこのページのセッションIDを比較し、ログイン認証済みかを判定
//ログイン認証してなければ処理がここでストップする。
sessionCheck(); // include/func.php に記載


//1.GETでidを取得
$id = $_GET["id"];

//2.DB接続など

    try{
        $pdo = new PDO('mysql:dbname=gskadai_1_16;host=localhost','root','');
    } catch (PDOException $e) {
        exit('DbConnectError:'.$e->getMessage());
    }

    $stmt = $pdo->query('SET NAMES utf8');
    if(!$stmt) {
        $error = $pdo->errorInfo();
        exit($error[2]);
    }

$stmt = $pdo->query('SET NAMES utf8');
if (!$stmt) {
  $error = $pdo->errorInfo();
  exit("charError:".$error[2]);
}


//3.SELECT * FROM gs_an_table WHERE id=***; を取得
$stmt = $pdo->prepare("SELECT * FROM gskadai_1_16_table WHERE id=:id;");
$stmt ->bindValue(':id', $id);
$status = $stmt->execute();

//4.select.phpと同じようにデータを取得（以下はイチ例）
// while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
//    $name = $result["name"];
//    $email = $result["name"];
//  }
$name="";
$email="";
$age="";
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
    while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
        $name = $result["name"];
        $email = $result["email"];
        $age = $result["age"];
        
    }
}
?>


<!DOCTYPE html>
<html lang="ja">
    <head>
       <nav></nav>
        <meta charset="utf-8">
        <title>編集</title>
        <link href="" rel="">
        <style></style>
    </head>
    <body>
      <header>
          <nav>
           <div class="navbar-header"><a class="" href="select.php">ユーザ一覧</a></div>
          </nav>
           
      </header>
    　<div class="main-contens">
           <form method="post" action="update.php">
                <fieldset>
                    <legend>編集</legend>
                    <label>名前:<input type="text" name="name" value="<?=$name?>"></label><br>
                    <label>Email:<input type="text" name="email" value="<?=$email?>"></label><br>
                    <label>年齢:<input type="text" name="age" value="<?=$age?>"></label><br>
                    <label>パスワード:<input type="password" name="password" ></label><br>
                    <input type="hidden" name="id" value="<?=$id?>">
                    <input type="submit" value="更新">
                    
                </fieldset>
             
           </form>
           
    </div>
      
    </body>
    
    
</html>
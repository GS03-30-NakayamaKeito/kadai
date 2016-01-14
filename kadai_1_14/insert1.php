<?php
  //1. POSTデータ取得（）
  $name = $_POST["name"];
  $email = $_POST["email"];
  $age = $_POST["age"];
  $naiyou = $_POST["naiyou"];

  //2. DB接続します
  $pdo = new PDO('mysql:dbname=an;host=localhost','root','');



  //2. DB文字コードを指定(固定)
  $stmt = $pdo->query('SET NAMES utf8');



  //３．データ登録SQL作成
  $stmt = $pdo->prepare("INSERT INTO an_table􏰀 (id, name, email, age, naiyou, indate )VALUES(NULL, :a1, :a2, :a3, :a4, sysdate())");
  $stmt->bindValue(':a1', $name);
  $stmt->bindValue(':a2', $email);
  $stmt->bindValue(':a3', $age);
  $stmt->bindValue(':a4', $naiyou);
  $status = $stmt->execute();


  //４．データ登録処理後
  if($status==false){
    //Errorの場合$status=falseとなり、エラー表示
    echo "SQLエラー";
    exit;
  }else{
    //５．index.phpへリダイレクト

//      header("Location: index.php");
//      exit;

  }
?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ登録完了</title>

</head>
<body>
    <div class="top">登録完了</div>
    <div class="bottom"><a class="bottom" href="index1.php">データ登録へ戻る</a></div>


</body>
</html>

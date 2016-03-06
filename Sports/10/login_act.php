<?php
session_start();
include('func.php'); //外部ファイル読み込み（関数群）

//POST受け取り[POSTデータの未入力チェック]
if( (isset($_POST["email"]) && $_POST["password"]!="") && (isset($_POST["email"]) && $_POST["password"]!="") ){
  $email = $_POST["email"];
  $password = $_POST["password"];
}else{
  //POSTがどちらか送信されてない、または、POSTデータのどちらかが未入力
  exit;
}

//1. 接続します
$pdo = db(); // new PDO(...を関数として読み込み (include/func.php)

//2. DB文字コードを指定
$stmt = dbCharSet($pdo);

//３．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM user_table WHERE email=:email AND password=:password AND life_flg=0");
$stmt->bindValue(':email', $email);
$stmt->bindValue(':password', $password);
$status = $stmt->execute();//SQL実行時

//４．SQL実行エラーチェック
dbExecError($status,$stmt);

//５．抽出データ数を取得
//$count = $stmt->fetchColumn(); //SELECT COUNT(*)で使用可能()
$val = $stmt->fetch(); //1レコードだけ取得する方法

//6. 該当レコードがあればSESSIONに値を代入
if( $val["id"] != "" ){
  //認証成功：
  loginSessionSet($val); // include/func.phpに関数を記述
  header("Location: index.php");
}else{
  //認証失敗：logout処理を経由して前画面へ
  header("Location: logout.php");
}
exit();
?>


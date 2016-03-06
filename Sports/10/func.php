<?php
//DB接続
function db(){
  try {
    return new PDO('mysql:dbname=Sports_DB;host=localhost', 'root', '');
  } catch (PDOException $e) {
    exit('DbConnectError:'.$e->getMessage());
  }
}

//DB文字設定
function dbCharSet($pdo){
  $stmt = $pdo->query('SET NAMES utf8');
  if (!$stmt) {
    $error = $pdo->errorInfo();
    exit($error[2]);
  }
  return $stmt;
}

//SQL実行エラーチェック
function dbExecError($status,$stmt){
  if($status==false){
    $error = $stmt->errorInfo();
    exit("QueryError:".$error[2]);
  }
}

//認証OK時の初期値セット
function loginSessionSet($val){
  $_SESSION["chk_ssid"]  = session_id();
  $_SESSION["kanri_flg"] = $val['kanri_flg'];
  $_SESSION["name"]      = $val['name'];
  //$_SESSION["age"]      = $val['age'];
  $_SESSION["email"]      = $val['email'];
}

//セッションチェック用関数
function sessionCheck(){
  if( !isset($_SESSION["chk_ssid"]) || ($_SESSION["chk_ssid"] != session_id()) ){
    echo "LOGIN ERROR";
    exit();
  }else{
     session_regenerate_id(true);
     $_SESSION["chk_ssid"] = session_id();
  }
}

//HTML XSS対策
function htmlEnc($value) {
    return htmlspecialchars($value,ENT_QUOTES);
}

function funcContactAddress($email,$name) {
    //言語設定、内部エンコーディングを指定する
    mb_language("japanese");
    mb_internal_encoding("EUC-JP");
    
    $to = $email;
    $subject = "登録";
    $body = "登録ありがとうございます";
    $from = "n.keikeito0122@gmail.com";
    
    
    mb_send_mail($to,$subject,$body,$from);
}

?>

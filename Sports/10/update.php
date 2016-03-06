<?php
session_start();
include('func.php'); //外部ファイル読み込み（関数群）

//０．前ページとこのページのセッションIDを比較し、ログイン認証済みかを判定
//ログイン認証してなければ処理がここでストップする。
sessionCheck(); // include/func.php に記載

    if(
        !isset($_POST["name"]) || $_POST["name"]=="" ||
        !isset($_POST["email"]) || $_POST["email"]=="" ||
        !isset($_POST["age"]) || $_POST["age"]=="" ||
        !isset($_POST["password"])|| $_POST["password"]==""
    ){
        exit('ParamError');
    }



    $name = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $password = $_POST["password"];
    $id = $_POST["id"];

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

    $stmt = $pdo->prepare("UPDATE gskadai_1_16_table SET name=:name, email=:email, age=:age, password=:password, indate=sysdate() WHERE id=:id");
    $stmt->bindValue(':name', $name);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':age', $age );
    $stmt->bindValue(':password', $password);
    //$stmt->bindValue(':indate', sysdate());
    $stmt->bindValue('id', $id);
    $status = $stmt->execute();

    if($status == false) {
        $error =$stmt->errorInfo();
        exit("QuerryError:".$error[2]);
    }else {
        header("Location: index.php");
        exit;
        
    }


?>
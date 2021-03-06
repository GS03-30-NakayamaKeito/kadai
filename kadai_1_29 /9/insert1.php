<?php
include('func1.php'); //外部ファイル読み込み（関数群）
    if(
        !isset($_POST["name"]) || $_POST["name"]=="" ||
        !isset($_POST["email"]) || $_POST["email"]=="" ||
        !isset($_POST["age"]) || $_POST["age"]=="" ||
        !isset($_POST["password"])|| $_POST["password"]==""
    ){
        exit('ParamError');
    }

    //ハッシュ化に使用する定数
    $salt = "mwefCMEP28DjwdW3lwdS239vVS";

    $name = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $password = md5($_POST["password"] . $salt);


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

    $stmt = $pdo->prepare("INSERT INTO gskadai_1_16_table (id, name, email, age, password, indate) VALUES (NULL, :a1, :a2, :a3, :a4, sysdate());");
    $stmt->bindValue(':a1', $name);
    $stmt->bindValue(':a2', $email);
    $stmt->bindValue(':a3', $age );
    $stmt->bindValue(':a4', $password);
    $status = $stmt->execute();

funcContactAddress($email,$name);

    if($status == false) {
        $error =$stmt->errorInfo();
        exit("QuerryError:".$error[2]);
    }else {
        header("Location: login1.php");
        exit;
        
    }
    
    

    

?>
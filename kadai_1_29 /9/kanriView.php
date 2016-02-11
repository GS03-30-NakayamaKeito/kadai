<?php
session_start();
include('func1.php'); //外部ファイル読み込み（関数群）

//０．前ページとこのページのセッションIDを比較し、ログイン認証済みかを判定
//ログイン認証してなければ処理がここでストップする。
sessionCheck(); // include/func.php に記載




?>



<!DOCTYPE html>
<html lang="ja">
    <head>
       <nav></nav>
        <meta charset="utf-8">
        <title>管理画面</title>
        <link href="" rel="">
        <style></style>
    </head>
    <body>
      <header>
          <nav>
            <div class="navbar-header"><a href="select2.php">ユーザー一覧</a></div>
            <div class="navbar-header"><a href="index.php">戻る</a></div>
          </nav>
           
      </header>

      
    </body>
    
    
</html>
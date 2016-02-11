<?php
session_start();
include('func.php'); //外部ファイル読み込み（関数群）

//０．前ページとこのページのセッションIDを比較し、ログイン認証済みかを判定
//ログイン認証してなければ処理がここでストップする。
sessionCheck(); // include/func.php に記載

//2. 認証後にSetされたSESSION変数を受け取り表示
$name = "<div>名前： " . $_SESSION["name"] . "<div>";
//3. 管理者FLGを表示
if( $_SESSION["kanri_flg"]==1 ) {
  $admin  =  "<div>権限：管理者</div>";
  $admin .=  '<div><a href="kanriView.php">管理者メニュー</a></div>';
    
}else if( $_SESSION["kanri_flg"]==0 ){
  $admin = "<div>権限：一般</div>";
}


?>



<!DOCTYPE html>
<html lang="ja">
    <head>
       <nav></nav>
        <meta charset="utf-8">
        <title>ホーム画面</title>
        <link href="" rel="">
        <style></style>
    </head>
    <body>
      <header>
          <nav>
             <?=$name?>
            <?=$admin?>
            <div class="navbar-header"><a href="logout.php">ログアウト</a></div>
          </nav>
           
      </header>

      
    </body>
    
    
</html>
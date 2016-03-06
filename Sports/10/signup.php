<!DOCTYPE html>
<html lang="ja">
    <head>
       <nav></nav>
        <meta charset="utf-8">
        <title>ユーザー登録</title>
        <link href="" rel="">
        <style></style>
    </head>
    <body>
        <div id="lamding-wrapper">
            <div class="jumbtron">
                <nav class="navbar" role="navigation">
                    <div class="conatainer">
                        <a class="navbar-barand" href="#"><div class="navbar-left_logo">Sports</div></a>
                    </div>
                </nav>
                <div class="contaier">
                    <form class="form-inline" role="form" action="signup_act" method="post">
                      <div class="email-singnup">
                       <leged>新規登録</leged>
                       <div class="form-group">
                           <input id="user-name" class="form-control" placeholder="ユーザー名"　type="text" name="user-name">
                       </div>
                       <div class="form-group">
                           <input id="user-email" class="form-control" placeholder="Email" type="email" name="usr-email">
                       </div>
                       <div class="form-group">
                           <input id="user-password" class="form-control" placeholder="Password" type="password" name="user-password">
                       </div>
                       <div class="form-group">
                           <input type="hidden" name="kanri-flg" value="0">
                       </div>
                       <div class="form-gruop">
                           <input type="hidden" name="life-flg" value="0">
                       </div>
                       <button class="btn" type="submit">新規登録</button>
                    </div>
                    </form>
                    
                </div>
            </div>
        </div>

<!--　タグ整理により削除
    　<div class="main-contens">
           <form method="post" action="signup_act.php">
                <fieldset>
                    <legend>登録</legend>
                    <label>名前:<input type="text" name="name"></label><br>
                    <label>Email:<input type="text" name="email"></label><br>
                    <label>年齢:<input type="text" name="age"></label><br>
                    <label>パスワード:<input type="password" name="password"></label><br>
                    <input type="submit" value="送信">
                    
                </fieldset>
             
           </form>
           
    </div>
     -->
      
    </body>
    
    
</html>
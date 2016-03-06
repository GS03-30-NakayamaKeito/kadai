<?php
include("func.php");
$title = "TOP";
//include("html_start.php");
?>
   <html>
    <head>
        <meta charset="utf-8">
        <title><?=htmlEnc($title)?></title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
      
      <div id="contents">
            <header class="header" id="header">
            
            </header>
            <section class="login">
                <div id="login-wrapper">
                    <form method="post" action="login_act.php">
                        <div class="logn_bg">
                             <div class="email-login">
                                <legend>Emailログイン</legend>
                                <div class="form-group">
                                    <div class="email-login_alert">このメールアドレスは登録されていません</div>
                                    <input class="form-control" id="login-email-form" placeholder="Email" type="email" name="email">
                                </div>
                            <div class="form-group">
                                <input class="form-control" id="login-password-form" placeholder="Password" name="password" type="password">
                            </div>
                            <div class="pull-left">
                                <a class="small-text" href="#">パスワードを忘れた場合</a>
                            </div>
                            <div class="pull-right">
                                <input type="submit" name="commit" value="ログイン"　class="c-btn">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <footer class="foooter"></footer>
    </div>
       </body>
</html>
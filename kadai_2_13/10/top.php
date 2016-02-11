<?php
include("func.php");
$title = "TOP";
include("html_start.php");
?>
    <div id="landding-wrapper">
       <div class="jumbotron">
            <header class="header">
                <a class="navbar-brand" href="#">
                   <div class="navbar-left_logo">Sports</div>
                </a>
                <ul class="navbar-right">
                    <li><a class="navbar-btn-login" href="login.php">ログイン</a></li>
                    <li><a class="navbar-btn-siginup" href="signup.php">新規登録</a></li>
                </ul>
            </header>
            <div class="contaier">
                <h1 class="jumbotron-tagline">"スポーツを身近に"</h1>
            </div>
        </div>
    </div>
<!--　画面追加により削除
<form method="post" action="login_act1.php">
   Email:<input type="text" name="email" />
   Password:<input type="password" name="password" />
   <input type="submit" value="ログイン" />
</form>
-->

<?php
include("html_end1.php")

?>
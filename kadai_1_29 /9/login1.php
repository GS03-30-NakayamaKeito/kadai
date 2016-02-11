<?php
include("func1.php");
$title = "LOGIN";
include("html_start1.php");
?>
<header>
    <p> ログイン</p>
    <div class="navbar-header"><a href="signup.php">新規登録</a></div>
</header>

<form method="post" action="login_act1.php">
   Email:<input type="text" name="email" />
   Password:<input type="password" name="password" />
   <input type="submit" value="ログイン" />
</form>
<?php
include("html_end1.php")

?>
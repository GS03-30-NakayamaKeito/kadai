<?php
include("func.php");
$title = "TOP";
include("html_start.php");
?>
    <div id="cintents">
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
                            
                            
                        </div>
                    </div>
                
                
                </form>
                
            </div>
        </section>
    </div>
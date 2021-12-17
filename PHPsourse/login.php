<?php require 'header.php'?>
<?php
if (!empty($_SESSION['msg'])) {
    echo '<div class="alert">',$_SESSION['msg'],'</div>';
    $_SESSION['msg'] = '';
}
?>
    <div class="form-wrapper">
        <h2>LOGIN</h2>
        <div class="form_login">
            <form method="post" action="connect-php/login-connect.php">
                <div class="form-item">
                    <input type="email" name="mail" required="required" placeholder="メールアドレス">
                </div>
                <div class="form-item">
                    <input type="password" name="password" required="required" placeholder="パスワード">
                </div>
                <div class="button-panel">
                    <input type="submit" class="button" title="ログイン" value="ログイン">
                </div>
            </form>
        </div>
        <div class="form-footer">
            <p><a href="newreg.php">会員登録はこちらから</a></p>
        </div>
    </div>
<?php require 'footer.php'; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ログインページ</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<?php require 'header.php'; ?>
<div class="form-wrapper">
    <h2>LOGIN</h2>
    <div class="form_login">
        <form method="post" action="login2-out.php">
            <div class="form-item">
                <input type="email" name="email" required="required" placeholder="メールアドレス">
            </div>
            <div class="form-item">
                <input type="password" name="password" required="required" placeholder="パスワード">
            </div>
            <div class="button-panel">
                <input type="submit" class="button" title="Sign In" value="Sign In">
            </div>
        </form>
    </div>
    <div class="form-footer">
        <p><a href="">会員登録はこちらから</a></p>
    </div>
    <div class="form-footer">
        <p><a href="">IDまたはパスワードをお忘れの方</a></p>
    </div>
</div>
<?php require 'footer.php'; ?>

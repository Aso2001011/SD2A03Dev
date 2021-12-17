<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>会員情報ページ</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/info.css">
</head>
<body>
<?php require 'header.php'; ?>
<div class="info_area">
    <h2>新規会員登録</h2>
    <form action="new-user-cmp.php" method="post">
        <div class="info_area_detail">
            <div class="info_item">
                <div class="item">
                    <p><span class="req">必須</span> メールアドレス</p>
                    <input type="email" name="mail" required>
                </div>
                <div class="item">
                    <p><span class="req">必須</span> パスワード</p>
                    <input type="password" name="password" required>
                </div>
            </div>
            <div class="info_item">
                <div class="item">
                    <p><span class="req">必須</span> 名前</p>
                    <input type="text" name="name" required>
                </div>
            </div>
            <div class="info_item">
                <div class="item">
                    <p><span class="req">必須</span> 電話番号　<span class="ex">数字11桁で入力してください</span></p>
                    <input type="text" name="tel" required>
                </div>
                <div class="item">
                    <p>郵便番号　<span class="ex">数字7桁で入力してください</span></p>
                    <input type="text" name="code">
                </div>
            </div>
            <div class="info_item">
                <div class="item address">
                    <p>住所</p>
                    <input type="text" name="address">
                </div>
            </div>
            <button type="submit">登録する</button>
        </div>
    </form>
</div>
<?php require 'footer.php'; ?>
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
    <h2>会員情報</h2>
    <form action="info-edit.php" method="post">
        <div class="info_area_detail">
            <div class="info_item">
                <div class="item">
                    <p>メールアドレス</p>
                    <input type="email" value="aaaaaaaa@aaaaaaa" name="mail" required>
                </div>
                <div class="item">
                    <p>パスワード</p>
                    <input type="password" value="aaaaaaa" name="password" required>
                </div>
            </div>
            <div class="info_item">
                <div class="item">
                    <p>姓</p>
                    <input type="text" value="ああああ" name="nameA" required>
                </div>
                <div class="item">
                    <p>名</p>
                    <input type="text" value="あああ" name="nameB" required>
                </div>
            </div>
            <div class="info_item">
                <div class="item">
                    <p>電話番号</p>
                    <input type="text" value="00000000000" name="tel" required>
                </div>
                <div class="item">
                    <p>郵便番号</p>
                    <input type="text" value="あああああああああ" name="code">
                </div>
            </div>
            <div class="info_item">
                <div class="item address">
                    <p>住所</p>
                    <input type="text" value="ああああああああああああ" name="address">
                </div>
            </div>
            <button type="submit">編集した情報を送信</button>
        </div>
    </form>
</div>
<?php require 'footer.php'; ?>
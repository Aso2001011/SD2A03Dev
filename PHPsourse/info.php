<?php
session_start();
?>
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
                    <input type="email" value="<?php echo $_SESSION['user']['mail'] ?>" name="mail" required>
                </div>
                <div class="item">
                    <p>パスワード</p>
                    <input type="text" value="<?php echo $_SESSION['user']['password'] ?>" name="password" required>
                </div>
            </div>
            <div class="info_item">
                <div class="item">
                    <p>名前</p>
                    <input type="text" value="<?php echo $_SESSION['user']['name'] ?>" name="name" required>
                </div>
            </div>
            <div class="info_item">
                <div class="item">
                    <p>電話番号</p>
                    <input type="text" value="<?php echo $_SESSION['user']['tel'] ?>" name="tel" required>
                </div>
                <div class="item">
                    <p>郵便番号</p>
                    <input type="text" value="<?php echo $_SESSION['user']['number'] ?>" name="code">
                </div>
            </div>
            <div class="info_item">
                <div class="item address">
                    <p>住所</p>
                    <input type="text" value="<?php echo $_SESSION['user']['address'] ?>" name="address">
                </div>
            </div>
            <button type="submit">編集した情報を送信</button>
        </div>

    </form>
</div>
<?php require 'footer.php'; ?>
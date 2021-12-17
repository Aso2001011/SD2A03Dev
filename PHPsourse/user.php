<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="./css/sanitize.css">
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" type="./text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="./css/style_user.css">

</head>
<body>
<div class="form-wrapper">
    <h1>会員情報</h1>
    <form action="info-edit.php" method="post">
        <div class="form-item1">
            <label for="email"></label>
            <input type="email" name="email" required="required" placeholder="メールアドレス"></input>
        </div>
        <div class="form-item1">
            <label for="password"></label>
            <input type="password" name="password" required="required" placeholder="パスワード"></input>
        </div>
        <div class="form-item2">
            <label for="password"></label>
            <input type="text" name="password" required="required" placeholder="性"></input>
        </div>
        <div class="form-item2">
            <label for="password"></label>
            <input type="text" name="password" required="required" placeholder="名"></input>
        </div>
        <div class="form-item3">
            <label for="password"></label>
            <input type="tel" name="password" required="required" placeholder="電話番号"></input>
        </div>
        <div class="form-item3">
            <label for="password"></label>
            <input type="tel" name="password" required="required" placeholder="郵便番号"></input>
        </div>
        <div class="form-item">
            <label for="password"></label>
            <input type="text" name="password" required="required" placeholder="住所"></input>
        </div>
        <div class="button-panel">
            <input type="submit" class="button" title="Sign In" value="編 集 完 了"></input>
        </div>
    </form>

</div>
</body>
</html>
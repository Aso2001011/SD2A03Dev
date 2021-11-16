<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>カート内ページ</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cart.css">
</head>
<body>
<?php require 'header.php'; ?>
<div class="title">
    <h2>カート</h2>
    <div class="itemnum">
        000個の商品
    </div>
</div>
<div class="cart_area">
    <hr>
    <div class="cartitem">
        <div class="cartitem_img">
            <a href="#"><img src="image/item_01.jpg"></a>
        </div>
        <div class="cartitem_name">
            商品名
        </div>
        <div class="cartitem_desc">
            <ul>
                <li>あああああああああああああああああああ</li>
                <li>いいいいいいいいいいいいいいいいいいい</li>
                <li>ううううううううううううううううううう</li>
                <li>えええええええええええええええええええ</li>
                <li>おおおおおおおおおおおおおおおおおおお</li>
            </ul>
        </div>
        <div class="cartitem_price">
            000,000円(税込)
        </div>
        <div class="cartitem_button">
            <button type="button" class="button_itemdetail">商品を見る</button><button type="button" class="button_delete">カートから削除</button>
        </div>
    </div>
    <hr>
    <div class="cartitem">
        <div class="cartitem_img">
            <a href="#"><img src="image/item_02.jpg"></a>
        </div>
        <div class="cartitem_name">
            商品名
        </div>
        <div class="cartitem_desc">
            <ul>
                <li>あああああああああああああああああああ</li>
                <li>いいいいいいいいいいいいいいいいいいい</li>
                <li>ううううううううううううううううううう</li>
                <li>えええええええええええええええええええ</li>
                <li>おおおおおおおおおおおおおおおおおおお</li>
            </ul>
        </div>
        <div class="cartitem_price">
            000,000円(税込)
        </div>
        <div class="cartitem_button">
            <button type="button" class="button_itemdetail">商品を見る</button><button type="button" class="button_delete">カートから削除</button>
        </div>
    </div>
    <hr>
    <div class="cartitem">
        <div class="cartitem_img">
            <a href="#"><img src="image/item_03.jpg"></a>
        </div>
        <div class="cartitem_name">
            商品名
        </div>
        <div class="cartitem_desc">
            <ul>
                <li>あああああああああああああああああああ</li>
                <li>いいいいいいいいいいいいいいいいいいい</li>
                <li>ううううううううううううううううううう</li>
                <li>えええええええええええええええええええ</li>
                <li>おおおおおおおおおおおおおおおおおおお</li>
            </ul>
        </div>
        <div class="cartitem_price">
            000,000円(税込)
        </div>
        <div class="cartitem_button">
            <button type="button" class="button_itemdetail">商品を見る</button><button type="button" class="button_delete">カートから削除</button>
        </div>
    </div>
    <hr>
    <div class="ok">
        <div class="sum">
            合計　<span>000,000円</span>
        </div>
        <div class="ok_button">
            <button type="button">購入する</button>
        </div>
    </div>
</div>

<?php require 'footer.php'; ?>

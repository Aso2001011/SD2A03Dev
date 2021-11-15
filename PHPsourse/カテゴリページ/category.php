<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>検索結果ページ</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/category.css">
</head>
<body>
<?php require 'header.php'; ?>
<!-- ここからそれぞれのコード -->
<h2><?php echo 'デスクトップPC'; ?>一覧</h2>
<div class="category_area">
    <div class="category_area_menu">
        <span><?php echo '000'; ?></span>個の商品
        <div class="cate_menu">
            <div class="menu_sort">
                <li>並び替え：</li>
                <li><button type="button">あいうえお順</button></li>
                <li><button type="button">価格が低い順</button></li>
                <li><button type="button">価格が高い順</button></li>
                <li><button type="button">新しい順</button></li>
                <li><button type="button">古い順</button></li>
            </div>
            <div class="menu_cate">
                <li>カテゴリ：</li>
                <li><button type="button">デスクトップPC</button></li>
                <li><button type="button">ノートPC</button></li>
                <li><button type="button">ゲーミングPC</button></li>
                <li><button type="button">クリエイター向けPC</button></li>
                <li><button type="button">周辺機器</button></li>
            </div>
        </div>
    </div>
    <hr>
    <div class="cateitem">
        <div class="cateitem_img">
            <a href="#"><img src="image/item_01.jpg"></a>
        </div>
        <div class="cateitem_name">
            商品名
        </div>
        <div class="cateitem_desc">
            <ul>
                <li>あああああああああああああああああああ</li>
                <li>いいいいいいいいいいいいいいいいいいい</li>
                <li>ううううううううううううううううううう</li>
                <li>えええええええええええええええええええ</li>
                <li>おおおおおおおおおおおおおおおおおおお</li>
            </ul>
        </div>
        <div class="cateitem_price">
            000,000円(税込)～
        </div>
        <div class="cateitem_button">
            <button type="button" class="button_itemdetail">商品詳細へ</button><button type="button" class="button_addcart">カートへ追加</button>
        </div>
    </div>
    <hr>
    <div class="cateitem">
        <div class="cateitem_img">
            <a href="#"><img src="image/item_02.jpg"></a>
        </div>
        <div class="cateitem_name">
            商品名
        </div>
        <div class="cateitem_desc">
            <ul>
                <li>あああああああああああああああああああ</li>
                <li>いいいいいいいいいいいいいいいいいいい</li>
                <li>ううううううううううううううううううう</li>
                <li>えええええええええええええええええええ</li>
                <li>おおおおおおおおおおおおおおおおおおお</li>
            </ul>
        </div>
        <div class="cateitem_price">
            000,000円(税込)～
        </div>
        <div class="cateitem_button">
            <button type="button" class="button_itemdetail">商品詳細へ</button><button type="button" class="button_addcart">カートへ追加</button>
        </div>
    </div>
    <hr>
    <div class="cateitem">
        <div class="cateitem_img">
            <a href="#"><img src="image/item_03.jpg"></a>
        </div>
        <div class="cateitem_name">
            商品名
        </div>
        <div class="cateitem_desc">
            <ul>
                <li>あああああああああああああああああああ</li>
                <li>いいいいいいいいいいいいいいいいいいい</li>
                <li>ううううううううううううううううううう</li>
                <li>えええええええええええええええええええ</li>
                <li>おおおおおおおおおおおおおおおおおおお</li>
            </ul>
        </div>
        <div class="cateitem_price">
            000,000円(税込)～
        </div>
        <div class="cateitem_button">
            <button type="button" class="button_itemdetail">商品詳細へ</button><button type="button" class="button_addcart">カートへ追加</button>
        </div>
    </div>
    <hr>
</div>
<?php require 'footer.php'; ?>
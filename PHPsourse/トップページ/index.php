<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>トップページ</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/toppage.css">
</head>
<body>
<?php require 'header.php'; ?>
<!-- ここからそれぞれのコード -->
<h2>BTOパソコンサイト<i class="fas fa-desktop"></i></h2>
<div class="mainVisual">
    <ul class="slider">
        <!-- 仮の画像 -->
        <li><a href="#"><img src="./image/color_black.png" alt=""></a></li>
        <li><a href="#"><img src="./image/color_blue.png" alt=""></a></li>
        <li><a href="#"><img src="./image/color_green.png" alt=""></a></li>
        <li><a href="#"><img src="./image/color_orange.png" alt=""></a></li>
        <li><a href="#"><img src="./image/color_red.png" alt=""></a></li>
        <li><a href="#"><img src="./image/color_yellow.png" alt=""></a></li>
    </ul>
</div>
<div class="middle_area">
    <div class="search_area">
        <form action="search.php" method="post"id="search">
            <h3>スペックから探す</h3>
            <div class="search_box">
                キーワード
                <div class="search_info">
                    <input type="text" name="keyword" placeholder="キーワード">
                    <i class="fas fa-key fa-lg fa-fw" aria-hidden="true"></i>
                </div>
            </div>
            <div class="price">
                <div class="search_box">
                    金額(下限)
                    <div class="search_info">
                        <select name="price">
                            <option value=0>0円</option>
                            <option value=0>10,000円</option>
                            <option value=0>20,000円</option>
                            <option value=0>30,000円</option>
                            <option value=0>40,000円</option>
                        </select>
                        <i class="fas fa-yen-sign fa-lg fa-fw" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="line">
                    <p>～</p>
                </div>
                <div class="search_box">
                    金額(上限)
                    <div class="search_info">
                        <select name="price">
                            <option value=0>0円</option>
                            <option value=0>10,000円</option>
                            <option value=0>20,000円</option>
                            <option value=0>30,000円</option>
                            <option value=0>1,000,000円</option>
                        </select>
                        <i class="fas fa-yen-sign fa-lg fa-fw" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="search_box">
                形状
                <div class="search_info">
                    <select name="type">
                        <option value=0>指定なし</option>
                        <option value=0>デスクトップPC</option>
                        <option value=0>ノートPC</option>
                    </select>
                    <i class="fas fa-shapes fa-lg fa-fw" aria-hidden="true"></i>
                </div>
            </div>
            <div class="search_box">
                CPU
                <div class="search_info">
                    <select name="cpu">
                        <option value=0>指定なし</option>
                        <option value=0>Core i3</option>
                        <option value=0>Core i5</option>
                        <option value=0>Core i7</option>
                        <option value=0>Core i9</option>
                    </select>
                    <i class="fas fa-microchip fa-lg fa-fw" aria-hidden="true"></i>
                </div>
            </div>
            <div class="search_box">
                メモリ
                <div class="search_info">
                    <select name="memory">
                        <option value=0>指定なし</option>
                        <option value=0>8GB</option>
                        <option value=0>16GB</option>
                        <option value=0>32GB</option>
                        <option value=0>64GB</option>
                    </select>
                    <i class="fas fa-sd-card fa-lg fa-fw" aria-hidden="true"></i>
                </div>
            </div>
            <div class="search_box">
                <button type="submit">検　索</button>
            </div>
        </form>
    </div>
    <div class="cate_area">
        <h3>カテゴリから探す</h3>
        <div class="cate_button_area">
            <button type="submit" form="search" name="cate" value=1>デスクトップPC</button>
            <button type="submit" form="search" name="cate" value=2>ノートPC</button>
            <button type="submit" form="search" name="cate" value=3>ゲーミングPC</button>
            <button type="submit" form="search" name="cate" value=4>クリエイター向けPC</button>
        </div>
    </div>
</div>
<!---------------------------------------->
<div class="item_area">
    <h2>ケースを選択する</h2>
    <div class="item_area_detail">
        <div class="items">
            <h4>商品名</h4>
            <div class="item_pic">
                <a href=""><img src="./image/item_01.jpg"></a>
            </div>
            <button type="button">商品を見る</button>
        </div>
        <div class="items">
            <h4>商品名</h4>
            <div class="item_pic">
                <a href=""><img src="./image/item_02.jpg"></a>
            </div>
            <button type="button">商品を見る</button>
        </div>
        <div class="items">
            <h4>商品名</h4>
            <div class="item_pic">
                <a href="" ><img src="./image/item_03.jpg"></a>
            </div>
            <button type="button">商品を見る</button>
        </div>
    </div>
    <a  class="more_item" href="">もっと見る　<i class="fas fa-angle-double-right"></i></a>
</div>
<?php require 'footer.php'; ?>

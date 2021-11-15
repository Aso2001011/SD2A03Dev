<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>検索結果ページ</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/search.css">
</head>
<body>
<?php require 'header.php'; ?>
    <!-- ここからそれぞれのコード -->
<div class="search_area">
    <div class="search_area_detail">
        <form action="" method="post">
            <div class="row row1">
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
                                <option>0円</option>
                                <option>10,000円</option>
                                <option>20,000円</option>
                                <option>30,000円</option>
                                <option>40,000円</option>
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
                                <option>0円</option>
                                <option>10,000円</option>
                                <option>20,000円</option>
                                <option>30,000円</option>
                                <option>40,000円</option>
                            </select>
                            <i class="fas fa-yen-sign fa-lg fa-fw" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row2">
                <div class="search_box">
                    形状
                    <div class="search_info">
                        <select name="type">
                            <option>指定なし</option>
                            <option>デスクトップPC</option>
                            <option>ノートPC</option>
                        </select>
                        <i class="fas fa-shapes fa-lg fa-fw" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="search_box">
                    CPU
                    <div class="search_info">
                        <select name="cpu">
                            <option>指定なし</option>
                            <option>Core i3</option>
                            <option>Core i5</option>
                            <option>Core i7</option>
                            <option>Core i9</option>
                        </select>
                        <i class="fas fa-microchip fa-lg fa-fw" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="search_box">
                    メモリ
                    <div class="search_info">
                        <select name="memory">
                            <option>指定なし</option>
                            <option>8GB</option>
                            <option>16GB</option>
                            <option>32GB</option>
                            <option>64GB</option>
                        </select>
                        <i class="fas fa-sd-card fa-lg fa-fw" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="search_box search_area_button">
                    <form action="search.php" method="post">
                        <button type="submit">再　検　索</button>
                    </form>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="hititem_area">
    <div class="hititem_area_menu">
        <li><span><?PHP echo '000'; ?></span>件のヒット</li>
        <li>並び替え：</li>
        <li class="sort_button"><button type="button">あいうえお順</button></li>
        <li class="sort_button"><button type="button">価格が低い順</button></li>
        <li class="sort_button"><button type="button">価格が高い順</button></li>
        <li class="sort_button"><button type="button">新しい順</button></li>
        <li class="sort_button"><button type="button">古い順</button></li>
    </div>
    <hr>
    <div class="hititem">
        <div class="hititem_img">
            <a href="#"><img src="image/item_01.jpg"></a>
        </div>
        <div class="hititem_name">
            商品名
        </div>
        <div class="hititem_desc">
            <ul>
                <li>あああああああああああああああああああ</li>
                <li>いいいいいいいいいいいいいいいいいいい</li>
                <li>ううううううううううううううううううう</li>
                <li>えええええええええええええええええええ</li>
                <li>おおおおおおおおおおおおおおおおおおお</li>
            </ul>
        </div>
        <div class="hititem_price">
            000,000円(税込)～
        </div>
        <div class="hititem_button">
            <button type="button" class="button_itemdetail">商品詳細へ</button><button type="button" class="button_addcart">カートへ追加</button>
        </div>
    </div>
    <hr>
    <div class="hititem">
        <div class="hititem_img">
            <a href="#"><img src="image/item_02.jpg"></a>
        </div>
        <div class="hititem_name">
            商品名
        </div>
        <div class="hititem_desc">
            <ul>
                <li>あああああああああああああああああああ</li>
                <li>いいいいいいいいいいいいいいいいいいい</li>
                <li>ううううううううううううううううううう</li>
                <li>えええええええええええええええええええ</li>
                <li>おおおおおおおおおおおおおおおおおおお</li>
            </ul>
        </div>
        <div class="hititem_price">
            000,000円(税込)～
        </div>
        <div class="hititem_button">
            <button type="button" class="button_itemdetail">商品詳細へ</button><button type="button" class="button_addcart">カートへ追加</button>
        </div>
    </div>
    <hr>
    <div class="hititem">
        <div class="hititem_img">
            <a href="#"><img src="image/item_03.jpg"></a>
        </div>
        <div class="hititem_name">
            商品名
        </div>
        <div class="hititem_desc">
            <ul>
                <li>あああああああああああああああああああ</li>
                <li>いいいいいいいいいいいいいいいいいいい</li>
                <li>ううううううううううううううううううう</li>
                <li>えええええええええええええええええええ</li>
                <li>おおおおおおおおおおおおおおおおおおお</li>
            </ul>
        </div>
        <div class="hititem_price">
            000,000円(税込)～
        </div>
        <div class="hititem_button">
            <button type="button" class="button_itemdetail">商品詳細へ</button><button type="button" class="button_addcart">カートへ追加</button>
        </div>
    </div>
    <hr>

</div>
<?php require 'footer.php'; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>トップページ</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <h1><a href="#">T　I　T　L　E</a></h1>
    <nav class="menu">
        <ul class="nav_menu1">
            <li class="nav_menu1_item"><a href="" class="">新規会員登録</a></li>
            <li class="nav_menu1_item"><a href="" class="">ご利用ガイド</a></li>
            <li class="nav_menu1_item"><a href="" class="">お問い合わせ</a></li>
            <li class="nav_menu1_item"><a href="" class="">サポート</a></li>
        </ul>
        <ul class="nav_menu2">
            <li class="nav_menu2_item login"><a href="" class=""><i class="fas fa-sign-in-alt"></i> ログイン</a></li>
            <li class="nav_menu2_item"><a href="" class=""><i class="fas fa-user-circle"></i> 会員情報</a></li>
            <li class="nav_menu2_item"><a href="" class=""><i class="fas fa-heart"></i> お気に入り</a></li>
            <li class="nav_menu2_item"><a href="" class=""><i class="fas fa-shopping-cart"></i> カート</a></li>
            <li class="nav_menu2_item glass"><input type="text" name="sarch" class="sarch" placeholder="何をお探しですか？"><button type="submit"><i class="fas fa-search"></i></button></li>
        </ul>
        <ul class="nav_menu3">
            <li class="nav_menu3_item"><a href="" class="">デスクトップPC</a></li>
            <li class="nav_menu3_item"><a href="" class="">ノートPC</a></li>
            <li class="nav_menu3_item"><a href="" class="">ゲーミングPC</a></li>
            <li class="nav_menu3_item"><a href="" class="">クリエイター向けPC</a></li>
            <li class="nav_menu3_item"><a href="" class="">周辺機器</a></li>
        </ul>
    </nav>
</header>
<div class="cont">
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
        <div class="sarch_area">
            <h3>スペックから探す</h3>
            <div class="sarch_box">
                キーワード
                <div class="sarch_info">
                    <input type="text" name="keyword" placeholder="キーワード">
                    <i class="fas fa-key fa-lg fa-fw" aria-hidden="true"></i>
                </div>
            </div>
            <div class="price">
                <div class="sarch_box">
                    金額(下限)
                    <div class="sarch_info">
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
                <div class="sarch_box">
                    金額(上限)
                    <div class="sarch_info">
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
            <div class="sarch_box">
                形状
                <div class="sarch_info">
                    <select name="type">
                        <option>指定なし</option>
                        <option>デスクトップPC</option>
                        <option>ノートPC</option>
                    </select>
                    <i class="fas fa-shapes fa-lg fa-fw" aria-hidden="true"></i>
                </div>
            </div>
            <div class="sarch_box">
                CPU
                <div class="sarch_info">
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
            <div class="sarch_box">
                メモリ
                <div class="sarch_info">
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
            <div class="sarch_box">
                <button type="submit">検　索</button>
            </div>
        </div>
        <div class="cate_area">
            <h3>カテゴリから探す</h3>
            <div class="cate_button_area">
                <button type="button" class="desk">デスクトップPC</button>
                <button type="button" class="note">ノートPC</button>
                <button type="button" class="game">ゲーミングPC</button>
                <button type="button" class="create">クリエイター向けPC</button>
                <button type="button" class="peri">周辺機器</button>
            </div>
        </div>
    </div>
    <!---------------------------------------->
    <div class="item_area">
        <h2>ケースを選択する</h2>
        <div class="item_area_detail">
            <div class="items">
                <div class="item_pic">
                    <a href=""><img src="./image/item_01.jpg"></a>
                </div>
                <button type="button">商品を見る</button>
            </div>
            <div class="items">
                <div class="item_pic">
                    <a href=""><img src="./image/item_02.jpg"></a>
                </div>
                <button type="button">商品を見る</button>
            </div>
            <div class="items">
                <div class="item_pic">
                    <a href="" ><img src="./image/item_03.jpg"></a>
                </div>
                <button type="button">商品を見る</button>
            </div>
        </div>
        <a  class="more_item" href="">もっと見る　<i class="fas fa-angle-double-right"></i></a>
    </div>
</div>
<!-------------------------------------------->
<footer>
    <div class="foot-wrap">
        <div class="menu-left">
            <h3>メニュー</h3>
            <ul class="foot-left">
                <li><a href="#">ログイン</a></li>
                <li><a href="#">会員情報</a></li>
                <li><a href="#">お気に入り</a></li>
                <li><a href="#">カート</a></li>
            </ul>
        </div>
        <div class="menu-center">
            <h3>カテゴリ</h3>
            <ul class="foot-center">
                <li><a href="#">デスクトップPC</a></li>
                <li><a href="#">ノートPC</a></li>
                <li><a href="#">ゲーミングPC</a></li>
                <li><a href="#">クリエイター向けPC</a></li>
                <li><a href="#">周辺機器</a></li>
            </ul>
        </div>
        <div class="menu-right">
            <h3>サポート</h3>
            <ul class="foot-right">
                <li><a href="#">新規会員登録</a></li>
                <li><a href="#">ご利用ガイド</a></li>
                <li><a href="#">お問い合わせ</a></li>
                <li><a href="#">サポート</a></li>
            </ul>
        </div>
        <small class="cmark">©2021システム開発3班</small>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!--自作のJS-->
<script src="./script/script.js"></script>
</body>
</html>

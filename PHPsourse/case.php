<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ケース一覧</title>
    <link rel="stylesheet" href="./css/sanitize.css">
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/cace.css">
</head>
<?php require "header.php";?>
  <!-- ここからそれぞれのコード -->
<?php
    require_once 'DBManager.php';
    $pdo = getDB();
?>
        <div class="item_area">
            <h2>ケース一覧</h2>
            <div class="item_area_detail">
                <div class="items">
                    <h4>商品名</h4>
                    <div class="item_pic">
                        <a href=""><img src="./img/case1.jpg"></a>
                    </div>
                    <button type="button">カスタマイズ</button>
                </div>
                <div class="items">
                    <h4>商品名</h4>
                    <div class="item_pic">
                        <a href=""><img src="./img/case2.jpg"></a>
                    </div>
                    <button type="button">カスタマイズ</button>
                </div>
                <div class="items">
                    <h4>商品名</h4>
                    <div class="item_pic">
                        <a href="" ><img src="./img/case3.jpg"></a>
                    </div>
                    <button type="button">カスタマイズ</button>
                </div>
            </div>
        </div>
    </br>
    <div class="item_area">
        <div class="item_area_detail">
            <div class="items">
                <h4>商品名</h4>
                <div class="item_pic">
                    <a href=""><img src="./img/case4.jpg"></a>
                </div>
                <button type="button">カスタマイズ</button>
            </div>
            <div class="items">
                <h4>商品名</h4>
                <div class="item_pic">
                    <a href=""><img src="./img/case5.jpg"></a>
                </div>
                <button type="button">カスタマイズ</button>
            </div>
            <div class="items">
                <h4>商品名</h4>
                <div class="item_pic">
                    <a href="" ><img src="./img/case6.jpg"></a>
                </div>
                <button type="button">カスタマイズ</button>
            </div>
        </div>
    </div>
</div>
<?php require "footer.php";?>
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
<?php

    require_once 'DBManager.php';
    $pdo = getDB();
    $cnt = 1;
    $que = 'select * from d_item';
    $nameque = 'select name from ';
    $cName = "";
    $mName = "";
    $gName = "";
    if (isset($_POST['price-max']) && $_POST['price-max'] != 0){
        $price = $_POST['price-max'];
        if ($cnt == 1) {
            $que = $que . " where";
        }
        $que = $que . " price <= $price";
        $cnt++;
    }
    if (isset($_POST['cpu']) && $_POST['cpu'] != 0){
        $cpu = $_POST['cpu'];
        if ($cnt == 1) {
            $que = $que . " where";
        } else {
            $que = $que . " and ";
        }
        $que = $que . " memory_id = $memory";

        $cnt++;
    }
    if (isset($_POST['memory']) && $_POST['memory'] != 0){
        $memory = $_POST['memory'];
        if ($cnt == 1) {
            $que = $que . " where";
        } else {
            $que = $que . " and ";
        }
        $que = $que . " memory_id = $memory";

        $cnt++;
    }
    if (isset($_POST['gpu']) && $_POST['gpu'] != 0){
        $gpu =$_POST['gpu'];
        if ($cnt == 1) {
            $que = $que . " where";
        } else {
            $que = $que . " and ";
        }
        $que = $que . " gpu_id = $gpu";

        $cnt++;
    }
    if (isset($_POST['cate']) && $_POST['cate'] != 0){
        $cate = $_POST['cate'];
        if ($cnt == 1) {
            $que = $que . " where";
        } else {
            $que = $que . " and ";
        }
        $que = $que . " pc_cate = $cate";

        $cnt++;
    }
    $que = $que . ";";
    echo $que;
    $cnt = 1;

    $sql = $pdo->prepare($que);
    $sql->execute();
    $result = $sql->fetchAll();
    ?>
<h2><?php echo 'デスクトップPC'; ?>一覧</h2>
<div class="category_area">
    <div class="category_area_menu">
        <span><?php echo count($result); ?></span>個の商品
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
    <?php
    if(isset($result[0])){
        foreach ($result as $row){
            $cpu = $row['cpu_id'];
            $memory = $row['memory_id'];
            $gpu = $row['gpu_id'];
            //echo '<table>';
            //echo '<td><div class="shouhin"></td>';
            //画像
            echo '<div class="cateitem">';
            echo '<div class="cateitem_img"><a href=""><img src="img/',$row['imgurl'],'"></a></div>';
            //商品名
            echo '<div class="cateitem_name">',$row['item_name'],'</div>';
            echo '<div class="cateitem_desc"><ul>';

            //CPUの名前を取得
            $cpuque = $nameque."m_cpu where cpu_id = $cpu";
            $cpuname = $pdo->prepare($cpuque);
            $cpuname->execute();
            $result = $cpuname->fetchAll();
            foreach ($result as $item) {
                $cName = $item['name'];
            }
            echo '<li>',$cName,'</li>';

            //Memoryの名前を取得
            $memque = $nameque."m_memory where memory_id = $memory";
            $memoryname = $pdo->prepare($memque);
            $memoryname->execute();
            $result = $memoryname->fetchAll();
            foreach ($result as $item) {
                $mName = $item['name'];
            }
            echo '<li>',$mName,'</li>';

            //GPUの名前を取得
            $gpuque = $nameque."m_gpu where gpu_id = $gpu";
            $gpuname = $pdo->prepare($gpuque);
            $gpuname->execute();
            $result = $gpuname->fetchAll();
            foreach ($result as $item) {
                $gName = $item['name'];
            }
            echo '<li>',$gName,'</li></div>';
            echo '<div class="cateitem_price">',$row['price'],'円（税込）~</div>';
            echo '<div class="cateitem_button"><button type="submit" class="button_itemdetail">商品詳細へ</button>';
            echo '<button type="submit" class="button_addcart">カートへ追加</button>';
            echo '</div>';
            echo '</div>';
            echo '<hr>';
        }
    }else{
        echo "<h2>該当商品はありません</h2>";
    }

    $sql=null;
    ?>
    <!--<div class="cateitem">
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
            <button type="button" class="button_itemdetail">商品詳細へ</button>
            <button type="button" class="button_addcart">カートへ追加</button>
        </div>
    </div>-->
    <hr>
</div>
<?php require 'footer.php'; ?>
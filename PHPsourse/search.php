<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>検索結果ページ</title>
    <link rel="stylesheet" href="./css/sanitize.css">
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" type="./text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/search.css">
</head>
<?php require 'header.php';?>
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
        $que = $que . " memory_id = $cpu";

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
    $cnt = 1;

    $sql = $pdo->prepare($que);
    $sql->execute();
    $result = $sql->fetchAll();
    ?>
<div class="category_area">
    <div class="category_area_menu">
        <div class="cate_menu">
            <div class="search_area">
                <div class="menu_search">
                    <form action="search.php" method="post">
                        スペックから探す:
                            金額(上限)
                            <select name="price-max">
                                <option value=0>-</option>
                                <option value=1000>￥1000</option>
                                <option value=5000>￥5000</option>
                                <option value=10000>￥10000</option>
                                <option value=50000>￥50000</option>
                                <option value=100000>￥100000</option>
                                <option value=200000>￥200000</option>
                                <option value=300000>￥300000</option>
                            </select>
                        CPU
                            <select name="cpu" id="s_cpu">
                                <option value=0>指定なし</option>
                                <?php
                                $ary = $pdo -> prepare('SELECT * FROM m_cpu');
                                $ary -> execute();
                                foreach($ary as$val) {
                                    echo '<option value=',$val['cpu_id'];
                                    if (isset($_POST['s_cpu']) && $val['cpu_id'] == $_POST['s_cpu']) echo ' selected';
                                    echo '>',$val['name'],'</option>';
                                };
                                ?>
                                <!--<option value=1>core-i5 シリーズ</option>
                                <option value=2>core-i7 シリーズ</option>
                                <option value=3>core-i9 シリーズ</option>
                                <option value=4>Ryzen 5 シリーズ</option>
                                <option value=5>Ryzen 7 シリーズ</option>
                                <option value=6>Ryzen 9 シリーズ</option>-->
                            </select>
                        メモリ
                            <select name="memory" id="s_ram">
                                <?php
                                $ary = $pdo -> prepare('SELECT * FROM m_memory');
                                $ary -> execute();
                                foreach($ary as$val) {
                                    echo '<option value=',$val['memory_id'];
                                    if (isset($_POST['s_memory']) && $val['memory_id']==$_POST['s_memory']) echo ' selected';
                                    echo '>',$val['name'],'</option>';
                                ?>
                                <!--<option value=0>指定なし</option>
                                <option value=1>8GB</option>
                                <option value=2>16GB</option>
                                <option value=3>32GB</option>
                                <option value=4>64GB</option>-->
                            </select>
                        グラフィックス
                            <select name="gpu" id="s_gpu">
                            <?php
                                $ary = $pdo -> prepare('SELECT * FROM m_gpu');
                                $ary -> execute();
                                foreach($ary as$val) {
                                    echo '<option value=',$val['gpu_id'];
                                    if (isset($_POST['s_gpu']) && $val['gpu_id']==$_POST['s_gpu']) echo ' selected';
                                    echo '>',$val['name'],'</option>';
                            ?>
                                <!--<option value=0>指定なし</option>
                                <option value=1>RTX 3080</option>
                                <option value=2>RTX 3070</option>
                                <option value=3>RTX 3060</option>
                                <option value=4>RTX 3060ti</option>-->
                            </select>
                        <br>
                        <button type="submit">検　索</button>
                    </form>
                </div>
            </div>
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
    <span><?php echo count($result); ?></span>個の商品
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
        //Memoryの名前を取
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
        echo '<div class="cateitem_button"><button type="submit" class="button_itemdetail"3>商品詳細へ</button>';
        echo '<button type="submit" class="button_addcart">カートへ追加</button>';
        echo '</div>';
        echo '</div>';
        echo '<hr>';
    }
}else {
    echo "<h2>該当商品はありません</h2>";
}

$sql=null;
?>
    </div>
<?php require_once 'footer.php'; ?>
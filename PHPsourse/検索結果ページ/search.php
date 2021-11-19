<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="./css/sanitize.css">
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" type="./text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/">

</head>
<?php require 'header.php';?>
    <!-- ここからそれぞれのコード -->
    <div class="box">
        <div class="search">
            <form action="" method="post">
                キーワード <input type="text" id="keyword" name="keyword">
                金額上限
                <select id="money-max" name="price-max">
                    <option value="0">-</option>
                    <option value="1000">￥1000</option>
                    <option value="5000">￥5000</option>
                    <option value="10000">￥10000</option>
                    <option value="50000">￥50000</option>
                    <option value="100000">￥100000</option>
                    <option value="200000">￥200000</option>
                    <option value="300000">￥300000</option>
                </select></br>

                CPU
                <select id="CPU" name="cpu">
                    <option value="0">指定なし</option>
                    <option value="1">core-i5 シリーズ</option>
                    <option value="2">core-i7 シリーズ</option>
                    <option value="3">core-i9 シリーズ</option>
                    <option value="4">Ryzen 5 シリーズ</option>
                    <option value="5">Ryzen 7 シリーズ</option>
                    <option value="6">Ryzen 9 シリーズ</option>
                </select>
                メモリ
                <select id="memory" name="memory">
                    <option value="0">指定なし</option>
                    <option value="1">8GB</option>
                    <option value="2">16GB</option>
                    <option value="3">32GB</option>
                    <option value="4">64GB</option>
                </select>
                グラフィック
                <select id="grafic" name="gpu">
                    <option value="0">指定なし</option>
                    <option value="1">RTX 3080</option>
                    <option value="2">RTX 3070</option>
                    <option value="3">RTX 3060</option>
                    <option value="4">RTX 3060ti</option>
                </select>
                <input type="submit" value="検索🔍">
            </form>
        </div>
    </div>
<?php

require_once 'DBManager.php';
$pdo = getDB();
$cnt = 1;
$que = 'select * from d_item';
$nameque = 'select name from ';
$cName = "";
$mName = "";
$gName = "";
$price = (int)$_POST['price-max'];
$cpu = (int)$_POST['cpu'];
$memory = (int)$_POST['memory'];
$gpu = (int)$_POST['gpu'];
//$exc = "";
//入力されてるかチェック
//値段
//条件　値段の値があるかつ指定されている
if (isset($price) && $price != 0) {
    if ($cnt == 1) {
        $que = $que . " where";
    }
    $que = $que . " price <= $price";
    $cnt++;
}
//CPU
//条件 CPUの値があるかつ指定されている
if (isset($cpu) && $cpu != 0) {
    if ($cnt == 1) {
        $que = $que . " where";
    } else {
        $que = $que . " and ";
    }
    $que = $que . " cpu_id = $cpu";

    $cnt++;
}
//Memory
//条件　Memoryの値があるかつ指定されている
if (isset($memory) && $memory != 0) {
    if ($cnt == 1) {
        $que = $que . " where";
    } else {
        $que = $que . " and ";
    }
    $que = $que . " memory_id = $memory";

    $cnt++;
}
//GPU
//条件　GPUの値があるかつ指定されている
if (isset($gpu) && $gpu != 0) {
    if ($cnt == 1) {
        $que = $que . " where";
    } else {
        $que = $que . " and ";
    }
    $que = $que . " gpu_id = $gpu";

    $cnt++;
}
if (isset($cate) && $cate != 0) {
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
echo '<div class="menu">';
echo '<li>',count($result),'件のヒット</li>';
?>

    <li>並べ替え</li>
    <li><input type="button" value="価格が低い順"></li>
    <li><input type="button" value="価格が高い順"></li>
    </div>
    <div class="sql">

        <?php
        if(isset($result[0])){
            foreach ($result as $row){
                $cpu = $row['cpu_id'];
                $memory = $row['memory_id'];
                $gpu = $row['gpu_id'];
                echo '<table>';
                echo '<td><div class="shouhin"></td>';
                echo '<td><img src="img/',$row['imgurl'],'" height="346px" width="346px" alt=""></td>';
                echo '<h2>',$row['item_name'],'</h2>';

                //CPUの名前を取得
                $cpuque = $nameque."m_cpu where cpu_id = $cpu";
                $cpuname = $pdo->prepare($cpuque);
                $cpuname->execute();
                $result = $cpuname->fetchAll();
                foreach ($result as $item) {
                    $cName = $item['name'];
                }
                echo $cName,'<br>';

                //Memoryの名前を取得
                $memque = $nameque."m_memory where memory_id = $memory";
                $memoryname = $pdo->prepare($memque);
                $memoryname->execute();
                $result = $memoryname->fetchAll();
                foreach ($result as $item) {
                    $mName = $item['name'];
                }
                echo $mName,'<br>';

                //GPUの名前を取得
                $gpuque = $nameque."m_gpu where gpu_id = $gpu";
                $gpuname = $pdo->prepare($gpuque);
                $gpuname->execute();
                $result = $gpuname->fetchAll();
                foreach ($result as $item) {
                    $gName = $item['name'];
                }
                echo $gName,'<br>';
                echo $row['price'],'円（税込）~';
                echo '<td><input type="button" value="商品詳細へ"></td>';
                echo '<td><input type="button" value="カートへ追加"></td>';
                echo '</table>';
                echo '<hr>';
            }
        }else{
            echo "<h2>該当商品はありません</h2>";
        }

        $sql=null;
        ?>
    </div>




<?php require 'footer.php';?>

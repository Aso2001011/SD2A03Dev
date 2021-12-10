<?php
function getDB() {
    // データベースへの接続を確認
    $dsn='mysql:host=mysql153.phy.lolipop.lan;
            dbname=LAA1290643-sd2a03dev;charset=utf8';
    $username='LAA1290643';
    $password='sd2adevelopment';
    $pdo=new PDO($dsn,$username,$password);
    return $pdo;
}
?>

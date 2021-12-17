<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>logoutcmp</title>
    <link rel="stylesheet" href="./css/sanitize.css">
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" type="./text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/login.css">
</head>
<?php require 'header.php'; ?>
<?php
if(isset($_SESSION['user'])){
    unset($_SESSION['user']);
    $_SESSION['login'] = false;
    echo '<h2>ログアウトしました</h2>';
    echo '<a href="index.php">戻る</a>';
}else{
    echo 'すでにログアウトしています';
}
?>
<?php require 'footer.php'; ?>

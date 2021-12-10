<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="./css/sanitize.css">
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" type="./text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/login.css">
</head>
<?php require_once 'header.php';?>

<?php require_once "DBManager.php";
$pdo = getDB();

$sql=$pdo->prepare('select * from m_customers where mail=? and password=?');
$sql->execute([$_POST['email'],$_POST['password']]);
foreach ($sql as $row) {
    $_SESSION['user']=[
            'id'=>$row['customer_code'],'password'=>$row['password'],
            'name'=>$row['name'],'tel'=>$row['tel'],
            'mail'=>$row['mail']];
}
if(isset($_SESSION['user'])){
    echo '<p>',$_SESSION['user']['name'],'さん、ようこそ！</p>';
}else{
    echo 'ID or Pass err';
}
$pdo = null;
?>

<?php require_once 'footer.php';?>
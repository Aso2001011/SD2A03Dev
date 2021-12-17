<?php session_start(); ?>

    <!DOCTYPE html>
    <html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>会員情報ページ</title>
        <link rel="stylesheet" href="css/sanitize.css">
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/info.css">
    </head>
<body>
<?php require 'header.php'; ?>
<?php require_once 'DBManager.php'; ?>
<?php
$check = true;
$pdo = getDB();
$sql = $pdo -> query('select * from m_user');
foreach ($sql as $row){
    if($_POST['mail'] == $row['mail']){
        $check = false;
    }
}
if($check){
    $sql = $pdo -> prepare('update `m_user` set `password` = :pass,`name` = :name,`tel` = :tel,
                        `mail` = :mail,`address` = :address,`address_number` = :code
                        where `mail` = :mail');
    $sql -> bindValue(':pass',$_POST['password']);
    $sql -> bindValue(':name',$_POST['name']);
    $sql -> bindValue(':tel',$_POST['tel']);
    $sql -> bindValue(':mail',$_POST['mail']);
    $sql -> bindValue(':address',$_POST['address']);
    $sql -> bindValue(':code',$_POST['code']);
    $sql ->execute();
    $sql = $pdo -> prepare('select * from m_user where mail = :mail');
    $sql ->bindValue(':mail',$_POST['mail']);
    $sql -> execute();
    foreach ($sql as $row) {
        $_SESSION['user']=[
            'password'=>$row['password'],
            'name'=>$row['name'],'tel'=>$row['tel'],
            'mail'=>$row['mail'],'address' => $row['address'],
            'number'=>$row['address_number']];
    }
    echo '<div class="info_area">';
    echo '<h2>会員情報</h2>';
    echo '<p class="send">編集した情報を送信しました</p>';
    echo '<p class="send"><a href="info.php">会員情報を確認する</a></p>';
    echo '</div>';
}else{
    echo 'メールアドレスが既に使われています';
}


?>

    <!--<div class="info_area">
        <h2>会員情報</h2>
        <p class="send">編集した情報を送信しました</p>
        <p class="send"><a href="info.php">会員情報を確認する</a></p>
    </div>-->
<?php require 'footer.php'; ?>
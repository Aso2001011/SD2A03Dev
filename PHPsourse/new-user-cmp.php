<?php
session_start();
?>
    <!DOCTYPE html>
    <html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>新規会員登録</title>
        <link rel="stylesheet" href="./css/sanitize.css">
        <link rel="stylesheet" href="./css/all.min.css">
        <link rel="stylesheet" type="./text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/info.css">
    </head>
<?php require 'header.php'; ?>
<?php
unset($_SESSION['user']);
require_once "DBManager.php";
$pdo = getDB();

/*$query = "insert into m_customers(password,name,tel,mail,address,address_number) values(";
$name = '"'.$_POST['name'].'"';
$mail = '"'.$_POST['mail'].'"';
$pass = '"'.$_POST['password'].'"';
$tel = '"'.$_POST['tel'].'"';
$address = '"'.$_POST['address'].'"';
$code = '"'.$_POST['code'].'"';
$query = $query.$pass.$name.$tel.$mail.$address.$code;
$sql = $pdo -> query('select * from m_customers');*/
$check = $pdo ->prepare('select * from m_user where mail = ?');
$check ->execute([$_POST['mail']]);

if(isset($check)){
    $sql=$pdo->prepare('insert into m_user(`password`,`name`,`tel`,`mail`,`address`,`address_number`
                                values(?,?,?,?,?,?))');
    $sql -> bindValue(1,$_POST['password']);
    $sql -> bindValue(2,$_POST['name']);
    $sql -> bindValue(3,$_POST['tel']);
    $sql -> bindValue(4,$_POST['mail']);
    $sql -> bindValue(5,$_POST['address']);
    $sql -> bindValue(6,$_POST['code']);
    $sql->execute();

    foreach ($sql as $row) {
        $_SESSION['user']=[
            'password'=>$row['password'],
            'name'=>$row['name'],'tel'=>$row['tel'],
            'mail'=>$row['mail'],'address' => $row['address'],
            'number'=>$row['address_number']];
        $_SESSION['login']= true;
    }
    if(isset($_SESSION['user']['name'])){
        echo '会員登録が完了しました';
        echo $_SESSION['user']['name'],'さん、ようこそ！';
    }
}else {
    echo 'メールアドレスが既に使われています';
    echo '<a href="new-user.php"><h3>再登録</h3></a>';
}

$pdo = null;
?>
<?php require 'footer.php'; ?>
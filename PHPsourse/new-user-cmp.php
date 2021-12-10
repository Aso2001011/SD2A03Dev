<?php
session_start();
?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<?php
unset($_SESSION['user']);
require_once "DBManager.php";
$pdo = getDB();
$query = "insert into m_customers(password,name,tel,mail,address) values(";
$name = '"'.$_POST['nameA'].$_POST['nameB'].'"';
$mail = '"'.$_POST['mail'].'"';
$pass = '"'.$_POST['password'].'"';
$tel = '"'.$_POST['tel'].'"';
$query = $query.$pass.$name.$tel.$mail;
if (isset($_POST['code'])){
    $addressCode = $_POST['code'];
}
if(isset($_POST['address'])){
    $address = $_POST['address'];
}



$sql=$pdo->prepare($query);
$sql->execute([$_POST['password'],$_POST['name'],$_POST['tel'],$_POST['email']]);

foreach ($sql as $row) {
    $_SESSION['user']=[
        'id'=>$row['id'],'name'=>$row['name'],
        'address'=>$row['address'],'login'=>$row['login'],
        'password'=>$row['password']];
}
if(isset($_SESSION['user']['name'])){
    echo '会員登録が完了しました';
    echo $_SESSION['user']['name'],'さん、ようこそ！';
}else{
    echo 'ID or Pass err';
}
$pdo = null;
echo '<br>DB_CLOSE <br>';
?>
<?php require 'footer.php'; ?>
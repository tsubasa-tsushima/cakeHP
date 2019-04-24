<?php
mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=cakeshop;host=localhost;","root","");

$pdo->exec("insert into kyuuzin(name,namekana,sex,age,address,cellphone,mailaddress,gakureki,sibouriyuu,keireki,zikopr,sonota) values('".$_POST['name']."','".$_POST['namekana']."','".$_POST['sex']."','".$_POST['age']."','".$_POST['address']."','".$_POST['cellphone']."','".$_POST['mailaddress']."','".$_POST['gakureki']."','".$_POST['sibouriyuu']."','".$_POST['keireki']."','".$_POST['zikopr']."','".$_POST['sonota']."');");

?>

<!doctype HTML>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>応募フォーム</title>
    <link rel="stylesheet" type="text/css" href="contactform_complete.css">
</head>
<body>
    <header>
<div class="header">
    <ul>
        <li><a href="home.html" title="トップページ">ＴＯＰ</a></li>
  <li><a href="shopinfo.html" title="店舗">店舗情報</a></li>
  <li><a href="productinfo.html" title="商品情報">商品情報</a></li>
  <li><a href="scout.html" title="採用情報">採用情報</a></li>
 </ul>    
    </div>
</header>

    <div class="confirm">
        <h2>応募フォーム</h2>
    <p>ご応募ありがとうございました。<br>
        3営業日以内に担当者よりご連絡差し上げます。
    </p>
    </div>
    <footer>
    Copyright © 2019 TSUSHIMACake All rights Reserved.
    </footer>
</body>
</html>
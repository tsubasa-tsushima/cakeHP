<!doctype HTML>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>応募フォーム</title>
    <link rel ="stylesheet" type="text/css" href="contactform_confirm.css">
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
    <h2>応募フォーム内容確認</h2>
    
    <div class="confirm">
    <p>応募内容はこちらでよろしいでしょうか？<br>
        よろしければ「送信する」ボタンを押してください。</p>
    
    <table>
        <tr>
          <th><label>名前</label></th>
          <td><?php echo $_POST['name'];?></td>
        </tr>
        
        <tr>
          <th><label>ふりがな</label></th>
          <td><?php echo $_POST['namekana'];?></td>
        </tr>
        
        <tr>
          <th><label>性別</label></th>
          <td><?php echo $_POST['sex'];?></td>
        </tr>
        
        <tr>
          <th><label>年齢</label></th>
          <td><?php echo $_POST['age'];?></td>
        </tr>
        
        <tr>
          <th><label>住所</label></th>
          <td><?php echo $_POST['address'];?></td>
        </tr>
        
        <tr>
          <th><label>電話番号</label></th>
          <td><?php echo $_POST['cellphone'];?></td>
        </tr>
        
        <tr>
          <th><label>メールアドレス</label></th>
          <td><?php echo $_POST['mailaddress'];?></td>
        </tr>
        
        <tr>
          <th><label>最終学歴</label></th>
          <td><?php echo $_POST['gakureki'];?></td>
        </tr>
        
        <tr>
          <th><label>志望理由</label></th>
          <td><?php echo $_POST['sibouriyuu'];?></td>
        </tr>
        
        <tr>
          <th><label>職務経歴</label></th>
          <td><?php echo $_POST['keireki'];?></td>
        </tr>
       
        <tr>
          <th><label>自己PR</label></th>
          <td><?php echo $_POST['zikopr'];?></td>
        </tr>
        
        <tr>
          <th><label>その他・質問等</label></th>
          <td><?php echo $_POST['sonota'];?></td>
        </tr>
   </table>
    
          <form action ="contactform.html">
            <div class="btn">
              <input type="submit" class="submit" value="修正する">
            </div>
        </form>
                      
         <form action ="insertcake.php" method="post">
            <div class="btn">
             <input type ="submit" class="submit" value="送信する"/>
            </div>
        <input type ="hidden" value="<?php echo $_POST['name'];?>"name="name">
             <input type ="hidden" value="<?php echo $_POST['namekana'];?>"name="namekana">
             <input type ="hidden" value="<?php echo $_POST['sex'];?>"name="sex">
             <input type ="hidden" value="<?php echo $_POST['age'];?>"name="age">
             <input type ="hidden" value="<?php echo $_POST['address'];?>"name="address">
             <input type ="hidden" value="<?php echo $_POST['cellphone'];?>"name="cellphone">
             <input type ="hidden" value="<?php echo $_POST['mailaddress'];?>"name="mailaddress">
             <input type ="hidden" value="<?php echo $_POST['gakureki'];?>"name="gakureki">
             <input type ="hidden" value="<?php echo $_POST['sibouriyuu'];?>"name="sibouriyuu">
             <input type ="hidden" value="<?php echo $_POST['keireki'];?>"name="keireki">
             <input type ="hidden" value="<?php echo $_POST['zikopr'];?>"name="zikopr">
             <input type ="hidden" value="<?php echo $_POST['sonota'];?>"name="sonota">
        </form>
        
    </div>
    
    <footer>
    Copyright © 2019 TSUSHIMACake All rights Reserved.
    </footer>
    </body>

</html>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
<link href="css/index.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="wrapper">
    <a href="#ant_top"><img class="bt" src="images/img_13.jpg" width="50" height="50"></a>
        <a id="ant_top"></a>

    <div id="header">
        <div id="logo">
            <center><a href="index.php"><img src="images/icon1.png" width="200" height="80"></a></center>
        </div>

        <div id="navi">
            <ul>
                <li class="navi1"><a href="index.php#izumo_top">ホーム</a></li>
                <li class="navi2"><a href="index.php#izumo_info_top">いづも庵について</a></li>
                <li class="navi3"><a href="index.php#izumo_menu_top">メニュー</a></li>
                <li class="navi4"><a href="index.php#izumo_access_top">店舗案内</a></li>
                <li class="navi5"><a href="contact.php">お問い合わせ</a></li>
             </ul>

        </div>
    </div>

    <div class="dummy"></div>

    <div id="ant">
        <div class="ant_midashi"><center><font size="5">いづも庵への問い合わせ</font></center></div>
        <div id="ant_con">
            <p>当店へのお問い合わせは、以下のフォームをご利用ください。<br><font color="red">*</font>は必須入力です。</p>
            <hr class="mar">

            <form action="#" method="POST">

            お名前<font color="red">*</font><br>
            <input type="text" placeholder="出雲 庵" style="border-style:none;" name="name"  size="97" value="">
            <hr>
            <?php echo $err_msg['name'];?>
            <br>

            ふりがな<br>
            <input type="text" placeholder="いづも あん" style="border-style:none;" name="kana"  size="97" value="">
            <hr><br>

            お電話番号<br>
            <input type="text" placeholder="09012345678" style="border-style:none;" name="tel"  size="97" value="">
            <hr><br>

            メールアドレス<font color="red">*</font><br>
            <input type="email" placeholder="example@izumo-an.con" style="border-style:none;" name="mail"  size="97" value="">
            <hr>
            <?php echo $err_msg['mail'];?>
            <br>

            お問い合わせ内容<font color="red">*</font><br>
            <textarea name="message" rows="10" cols="71"></textarea>
            <br>
            <?php echo $err_msg['message'];?>

            <input type="hidden" name="state" value="confilm">
            <center><input class="submit_bt" type="submit" name="confilm" value="入力内容で確認する"></center>
            </form>
        </div>
    </div>
</div>
<div id="cr">
<center>Copyright 2018</center>
</div>
</body>
</html>
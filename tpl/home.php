<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Document</title>

<script src=".https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="./js/home.js"></script>
<link href="./css/index.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="wrapper">
<p id="page-top"><a href="#izumo_top"><img class="bt" src="./images/img_13.jpg" width="50" height="50"></a></p>
    <a id="izumo_top"></a>
<div id="header">
    <div id="logo">
        <center><a href="index.php"><img src="./images/icon1.png" width="200" height="80"></a></center>
    </div>

    <div id="navi">
        <ul>
            <li class="navi1"><a href="#izumo_top">ホーム</a></li>
            <li class="navi2"><a href="#izumo_info_top">いづも庵について</a></li>
            <li class="navi3"><a href="#izumo_menu_top">メニュー</a></li>
            <li class="navi4"><a href="#izumo_access_top">店舗案内</a></li>
            <li class="navi5"><a href="ant.php">お問い合わせ</a></li>
            </ul>

    </div>
</div>
<div id="slideshow" class="slideshow">
    <img src="./images/img_01.jpg" alt="">
    <img src="./images/img_14.jpg" alt="">
    <img src="./images/img_15.jpg" alt="">
</div>

<div id="news">
    <div id="news_con">
    <div class="news_m"><center><h1><span style="border-bottom: solid 5px #000;">いづも庵からのお知らせ</span></h1></center></div>
        <br>
        <div id="news_box">
            <dl id="acMenu">
                <?php foreach ($csv as $item) { ?>
                <dt><?php echo $item[1];?></dt>
                <dd><?php echo $item[2];?></dd>
                <?php } ?>
            </dl>
        </div>
    </div>
</div>

<a id="izumo_info_top"></a>
<div class="length"></div>
<div id="izumo_img">
    <div id="izumo_info">
        <center class="izumo_info_c">
        <ul>
        <li><h1><span style="border-bottom: solid 5px #000;">いづも庵について</span></h1><BR></li>
        <li><h2>麺づくり創業100年</h2><BR></li>
        <li><p>おいしいうどんを地元の方々に味わっていただきたいと初代店主　出雲勉。<BR>
        それを受け継いだ2代目店主　出雲文人。<BR>
        おいしいうどんを通じて淡路のおいしい食材をたくさんの方に味わっていただきたいという想いで引き継いでおります。<BR></p>
        </li>
        <BR>
        <li>
        <p>また、いづも庵ではお客様はもちろんのこと、スタッフ達が気持ちよく働ける快適な環境作りにも力をいれています！<BR>
        いきいきとしたスタッフ達が、みなさまをあたたかくお迎えいたします！</p><BR>
        </li>
        </center>
        </ul>
    </div>
</div>

<div id="izumo_info2">
    <div class="info_midashi">
        <center><h2>地元の方、そして島外の方々にも喜んでいただけるお店づくりをスタッフ一同目指しております。</h2></center>
    </div>

    <div id="izumo_info2_con">
        <div class="info2_con1">
            <img src="./images/img_06.jpg" width="360" height="360">
            <center><p><span style="margin-top:30px;">
            心底おいしい、いづも庵のざるうどんです！
            </span></p></center>
        </div>

        <div class="info2_con2">
            <img src="./images/img_07.jpg"  width="360" height="360">
            <center><p><span style="margin-top:30px;">
            うどんだけではなく、<BR>おそばもほんと美味しんですよ！
            </span></p></center>
        </div>
        <div class="info2_con3">
            <img src="./images/img_08.jpg"  width="360" height="360">
            <center><p><span style="margin-top:30px;">
            揚げ物は揚げたてサクサクのうちに！！
            </span></p></center>
        </div>
    </div>
</div>

<a id="izumo_menu_top"></a>
<div class="length"></div>

    <div id="menu_midashi">
        <span style="float:left"><img src="./images/img_04.jpg" height="406"></span>
        <center class="izumo_menu_c"><h1><span style="border-bottom: solid 5px #000;">人気メニュー</span></h1><br>
        <p class="menu_ms">麺乃匠 いづも庵 がオススメする人気メニュー！<br>
        「どれも美味しそうだけど何を注文したらいいのか迷ってしまう」というお客様に！！<br>
        当店人気メニューをご紹介！！<br>
        はじめてお越しの方はぜひ一度お試しください！<br></p></center>
    </div>

    <div id="menu_wrapper">
        <div id="menu_con1">
            <img src="./images/img_11.jpg" width="380" height="270">
            <div class="menu_midashi"><h3>淡路まるごと "タマネギつけ麺"　(880円)</h3></div>
            <strong>当店人気Ｎｏ．１メニュー！！こだわりの逸品！</strong><br>
            <p><BR>
            特製の細ちぢれ麺に、こだわりダシで淡路島のうまいをご賞味ください。<br>
            かつおやさばなどの自然の風味豊かなだしの中には大きな玉ねぎがどかんと丸々1個<br>
            </p>
        </div>
        <div id="menu_con2">
            <img src="./images/img_09.jpg" width="380" height="270">
            <div class="menu_midashi"><h3>"淡路石焼き牛丼"（950円）</h3></div>
            <strong>当店自慢の名物メニュー！アツアツの石焼で提供</strong>
            <p><br>
            淡路島のお肉のおいしさをもっと知ってほしい！<br>
            お客様に一番美味しい状態で食べていただきたいと店主の出雲が考案したのはアツアツで食べられる石焼。<br>
            </p>
        </div>
        <div id="menu_con3">
            <img src="./images/img_10.jpg" width="380" height="270">
            <div class="menu_midashi"><h3>“牛すじぶっかけ”</h3></div>
            <strong>創業100年の老舗麺屋さん直営<br>淡路牛スジを特製和風ダシで長時間煮込んだ自慢の一品！！</strong><br>
            <p><BR>
            じっくり時間をかけて甘辛に煮込んだやわらか牛すじがコシとモチ感のある冷しうどんにベストマッチ！！<br>
            冷し牛すじぶっかけ：８３０円<br>
            あったかいのもあります。<br>
            淡路牛のすじうどん：８３０円<br>
            </p>
        </div>
    </div>

<a id="izumo_access_top"></a>
<div class="length"></div>

<div id="access_midashi"><center><h1>いづも庵の<BR>店舗案内</h1></center></div>
<div id="access_wrapper">
    <div class="box"><p><img src="./images/img_12.jpg" width="1000" height="406"></p></div>


    <div id="access_con">
    <img src="./images/icon.png" width="290"><BR>
    <p><font size="4">麺乃匠 いづも庵</font></p>
        <div id="access_box">
            電話番号：０７９９－６２－６００２<br>
            <font color="red">※土・日・祝祭日のご予約は致しかねます。<br>
            ご理解の程よろしくお願いいたします。</font><br>
            ＦＡＸ　：０７９９－６２－０１９２<br>
            住所　　：淡路市志筑３５２２－１<br>
            営業時間：午前１１時～午後８時<br>
        　　　　<center>（午後３～５時準備中）</center><br>
            定休日　：毎週木曜日（祝祭日は営業・翌日休<br>
        </div>
    </div>
    <div id="access_map">
    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3290.681374576788!2d134.90340321494355!3d34.43484768050353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3554b642c80def33%3A0x7274782351578d96!2z44GE44Gl44KC5bq1!5e0!3m2!1sja!2sjp!4v1517462286333" width="500" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</div>

<div id="footer">
    <div id="f_con">
        <p>お問い合わせはこちらから</p>
        <hr>

        <div class="f_bt">
        <center><a class="button" href="ant.php"><img src="./images/icon2.png">お問い合わせフォーム</a></center>
        </div>

        <div class="f_bt">
        <center><img src="./images/icon3.png">0577-33-1008</center>
        </div>
    </div>
</div>
<div id="cr">
<center>Copyright 2018</center>
</div>
</div>

</body>
</html>
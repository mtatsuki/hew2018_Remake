<?php if (!empty($_GET["cnt"]) or !empty($_GET["submit"])) {
    if (!empty($_GET['cnt']) == 4) {
        echo "<center><strong>送信が完了しました。</strong></center><BR>\n";
        /*書き込み*/
        if (!empty($_GET["kanar"])) {
                $kana =$_GET["kanar"];
        } else {
                $kana = '未入力';
        }
        if (!empty($_GET["numberr"])) {
                $number =$_GET["numberr"];
        } else {
                $number = '未入力';
        }

        date_default_timezone_set('Asia/Tokyo');
        $year = date("Y/m/d");
        $hour = date("H:i");
        $message = str_replace("\n", "\t", $_GET["messager"]);
        $fp = fopen('ant_data.csv', 'a');
        fwrite($fp, $year.",".$hour.",".$_GET["namer"].",".$kana.",".$number.",".$_GET["emailr"].",".$message."\n");
        fclose($fp);
    } else {
        echo "未入力の項目があります<BR>\n";
    }
}
if (empty($_GET) or !empty($_GET["submit"]) or !empty($_GET["back"])) {
}

if (!empty($_GET["confilm"])) {
    $count=1;
}

require_once "./tpl/contact.php";

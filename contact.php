<?php
session_start();
//表示データ初期化
$prof = array(
    'name' => '',
    'kana' => '',
    'tel' => '',
    'mail' => '',
    'message' =>'',
);

$err_msg = array(
    'name' => '',
    'kana' => '',
    'tel' => '',
    'mail' => '',
    'message' =>'',
);

if (!empty($_POST) && isset($_POST['state']) && $_POST['state'] == 'confilm') {
    //入力された値を取得
    foreach ($prof as $key => $value) {
        $prof[$key] = $_POST[$key];
    }

    //入力値チェック
    $err_flg = 0;
    //氏名
    if ($prof['name'] == '') {
        $err_msg['name'] = 'お名前が入力されていません。';
        $err_flg = 1;
    }

    //メールアドレス
    if ($prof['mail'] == '') {
        $err_msg['mail'] = 'メールアドレスが入力されていません。';
        $err_flg = 1;
    } elseif (strpos($prof['mail'], '@') == false) {
        $err_msg['mail'] = '正しいメールの形式で入力してください';
        $err_flg = 1;
    }

    //お問い合わせ内容
    if ($prof['message'] == '') {
        $err_msg['message'] = '問い合わせ内容が入力されていません。';
        $err_flg = 1;
    }

    if ($err_flg == 0) {
        $_SESSION['prof'] = $prof;
        header("location:confilm.php");
    }
} elseif (!empty($_SESSION) && isset($_SESSION['prof']) && isset($_POST['state']) && $_POST['state'] == 'back') {
    $prof = $_SESSION['prof'];


    foreach ($prof as $key => $value) {
        if (!isset($err_msg[$key])) {
            $err_msg[$key] = '';
        }
    }
}

require_once "./tpl/contact.php";

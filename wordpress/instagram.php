<?php
//POSTリクエストの場合のみ受付
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //アクセストークン
    $access_token = "6675284548.10caf5e.3b34c7675d1e4438acf4eddd17fd58f0"; //取得したアクセストークンを設置
    //JSONデータを取得して出力
    echo @file_get_contents("https://api.instagram.com/v1/users/self/media/recent/?access_token={$access_token}");
    //終了
    exit;
}

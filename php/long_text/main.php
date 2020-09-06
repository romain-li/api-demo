<?php

require 'lib/utils.php';

$url = 'http://api-longtext-bj.fengkongcloud.com/longtext/v4';
$access_key = '{ACCESS_KEY}';
$text = '{TEXT}';
$uid = '{UID}';

$payload = array(
    'accessKey' => $access_key,
    'appId' => 'default',
    'eventId' => 'default',
    'type' => 'POLITICS_VIOLENCE_PORN',
    'data' => array(
        'text' => $text,
        'tokenId' => $uid,
    ),
);

$res = request_post($url, json_encode($payload));
$data = json_decode($res);
// 通过 code 和 riskLevel 判断返回，具体请参考接口文档
var_dump($data);
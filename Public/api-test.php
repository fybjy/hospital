<?php

//require '../../ZF/framework/src/lib/Hprose/HproseHttpClient.php';
//
//$client = new HproseHttpClient('http://wdc.weiwubao.dev/api.php/order');
//echo '<pre>';
//var_dump($client->payInfo(13));

echo file_get_contents('http://1.800194.wdc.weiwubao.dev/site/order/pay_page?id=16786');
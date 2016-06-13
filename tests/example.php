<?php
/**
 * Created by PhpStorm.
 * User: hanson
 * Date: 16/6/12
 * Time: 下午4:20
 */

require __DIR__ . './../vendor/autoload.php';

$appKey = '658985';
$secret = 'a4d4a978c52d76dce1d910d9cd4a784f';
$appKey = '658962';
$secret = 'f0412ad7076cf07bdbbf8221060353d8';
//$appKey = '658905';
//$secret = '9bba902c77cfc54dee5d018c21c9d3ca';
//set_time_limit(1);
$weidian = new \Hanccc\Weidian($appKey, $secret);
//$weidian = new \Hanccc\Weidian($appKey, $secret, 'b4245df12fe4bdda45a0bf2768380d22000498613f');
//$weidian = new \Hanccc\Weidian($appKey, $secret, '96c53bd86ea26fb744210c11b4cc8fcb000498613f');
//echo $weidian->getAccessToken();
//$weidian = new \Hanccc\Weidian($appKey, $secret);
$data = json_decode('{"item":"test","name":"test","title":"test","price":"1.5","stock":"5","itemName":"接口测试商品","bigImgs":["http://wd.geilicdn.com/vshop395640-1390204649-1.jpg","http://wd.geilicdn.com/vshop395640-1390204649-2.jpg"],"titles":["图片1","图片2"],"cate_id":"747864,747860","free_delivery":"1","remote_free_delivery":"1"}', true);
//print_r($data);
$result = $weidian->send(\Hanccc\Services\ItemService::addItem($data));
print_r($result);
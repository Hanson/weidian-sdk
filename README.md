# weidian-api

微店的API接口包

## Installation

```
composer require hanson/weidian
```

## Usage

```
$weidian = new Hanccc/Weidian('appkey', 'secret');
//$weidian = new Hanccc/Weidian('appkey', 'secret', 'access_token');

//上架举例

$data = ['itemid' => 'itemid', 'opt' => 1];

$weidian->send(Hanccc\Services\ItemService::itemOnSale($data));
```

### Notice

文档有版本号限制,此包版本为 2016-6-20 的版本, 如有变动可手动设置版本号或提交issue通知本人变更
```
$weidian->send(Hanccc\Services\ItemService::itemOnSale($data, '1.0.1'));
```

### Document

具体传参请查阅 [官方文档链接](http://wiki.open.weidian.com/) 

### 商品API
```

Hanccc\Services\ItemService::getItem($data)

Hanccc\Services\ItemService::addItem($data)

Hanccc\Services\ItemService::listItem($data)

Hanccc\Services\ItemService::deleteItem($data)

Hanccc\Services\ItemService::addItemImage($data)

Hanccc\Services\ItemService::deleteItemImage($data)

Hanccc\Services\ItemService::updateItem($data)

Hanccc\Services\ItemService::addItemSku($data)

Hanccc\Services\ItemService::updateItemSku($data)

Hanccc\Services\ItemService::deleteItemSku($data)

Hanccc\Services\ItemService::getItemCate($data)

Hanccc\Services\ItemService::setItemCate($data)

Hanccc\Services\ItemService::cancelItemCate($data)

Hanccc\Services\ItemService::addItemCate($data)

Hanccc\Services\ItemService::updateItemCate($data)

Hanccc\Services\ItemService::deleteItemCate($data)

Hanccc\Services\ItemService::itemOnSale($data)

Hanccc\Services\ItemService::itemSetTop($data)

Hanccc\Services\ItemService::itemCancelTop($data)

Hanccc\Services\ItemService::delDiscountItem($data)

Hanccc\Services\ItemService::getCateList($data)
```

### 订单API
```
Hanccc\Services\OrderService::getOrderList($data)

Hanccc\Services\OrderService::getOrder($data)

Hanccc\Services\OrderService::deliverOrder($data)

Hanccc\Services\OrderService::modifyExpress($data)

Hanccc\Services\OrderService::modifyOrder($data)

Hanccc\Services\OrderService::refundOrder($data)

Hanccc\Services\OrderService::cancelOrder($data)

Hanccc\Services\OrderService::delayOrder($data)
```

### 营销工具API
```
Hanccc\Services\MarketService::getDiscountList($data)

Hanccc\Services\MarketService::setDiscountItem($data)

Hanccc\Services\MarketService::createCoupon($data)

Hanccc\Services\MarketService::deleteCoupon($data)

Hanccc\Services\MarketService::getCoupon($data)

Hanccc\Services\MarketService::getCouponList($data)

Hanccc\Services\MarketService::getCouponReport($data)

```

### CPS API
```
Hanccc\Services\CpsService::searchItem($data)

Hanccc\Services\CpsService::getCpsItem($data)

Hanccc\Services\CpsService::getItemPublic($data)
```

### 微中心API
```
Hanccc\Services\WeiService::listOrder($data)

Hanccc\Services\WeiService::getOrder($data)

Hanccc\Services\WeiService::deliverOrder($data)

Hanccc\Services\WeiService::modifyExpress($data)
```

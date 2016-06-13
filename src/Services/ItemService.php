<?php
/**
 * Created by PhpStorm.
 * User: hanson
 * Date: 16/6/13
 * Time: 上午9:43
 */

namespace Hanccc\Services;


class ItemService implements Service
{

    public static $freeDelivery = 0;
    public static $costDelivery = 1;

    public static $methodPrefix = 'vdian.item.';


    public static function getItem($data, $version = '1.0')
    {
        return [
            'public' => [
                'method' => self::$methodPrefix . 'get',
                'version' => $version
            ],
            'param' => json_encode($data),
        ];
    }


    public static function addItem($data, $version = '1.1')
    {
        return [
            'public' => [
                'method' => self::$methodPrefix . 'add',
                'version' => $version
            ],
            'param' => json_encode($data),
        ];
    }


    public static function listItem($data, $version = '1.0')
    {
        return [
            'public' => [
                'method' => self::$methodPrefix . 'get',
                'version' => $version
            ],
            'param' => json_encode($data),
        ];
    }


    public static function deleteItem($data, $version = '1.0')
    {
        return [
            'public' => [
                'method' => self::$methodPrefix . 'delete',
                'version' => $version
            ],
            'param' => json_encode($data),
        ];
    }


    public static function addItemImage($data, $version = '1.0')
    {
        return [
            'public' => [
                'method' => self::$methodPrefix . 'image.add',
                'version' => $version
            ],
            'param' => json_encode($data),
        ];
    }


    public static function deleteItemImage($data, $version = '1.0')
    {
        return [
            'public' => [
                'method' => self::$methodPrefix . 'image.delete',
                'version' => $version
            ],
            'param' => json_encode($data),
        ];
    }


    public static function updateItem($data, $version = '1.1')
    {
        return [
            'public' => [
                'method' => self::$methodPrefix . 'update',
                'version' => $version
            ],
            'param' => json_encode($data),
        ];
    }


    public static function addItemSku($data, $version = '1.0')
    {
        return [
            'public' => [
                'method' => self::$methodPrefix . 'sku.add',
                'version' => $version
            ],
            'param' => json_encode($data),
        ];
    }


    public static function updateItemSku($data, $version = '1.0')
    {
        return [
            'public' => [
                'method' => self::$methodPrefix . 'sku.update',
                'version' => $version
            ],
            'param' => json_encode($data),
        ];
    }


    public static function deleteItemSku($data, $version = '1.0')
    {
        return [
            'public' => [
                'method' => self::$methodPrefix . 'sku.delete',
                'version' => $version
            ],
            'param' => json_encode($data),
        ];
    }


    public static function getItemCate($data, $version = '1.0')
    {
        return [
            'public' => [
                'method' => self::$methodPrefix . 'cate.get',
                'version' => $version
            ],
            'param' => json_encode($data),
        ];
    }


    public static function setItemCate($data, $version = '1.0')
    {
        return [
            'public' => [
                'method' => self::$methodPrefix . 'cate.set',
                'version' => $version
            ],
            'param' => json_encode($data),
        ];
    }


    public static function cancelItemCate($data, $version = '1.0')
    {
        return [
            'public' => [
                'method' => self::$methodPrefix . 'cate.cancel',
                'version' => $version
            ],
            'param' => json_encode($data),
        ];
    }


    public static function addItemCate($data, $version = '1.0')
    {
        return [
            'public' => [
                'method' => 'vdian.shop.cate.add',
                'version' => $version
            ],
            'param' => json_encode($data),
        ];
    }


    public static function updateItemCate($data, $version = '1.0')
    {
        return [
            'public' => [
                'method' => 'vdian.shop.cate.update',
                'version' => $version
            ],
            'param' => json_encode($data),
        ];
    }


    public static function deleteItemCate($data, $version = '1.0')
    {
        return [
            'public' => [
                'method' => 'vdian.shop.cate.delete',
                'version' => $version
            ],
            'param' => json_encode($data),
        ];
    }


    public static function itemOnSale($data, $version = '1.0')
    {
        return [
            'public' => [
                'method' => 'weidian.item.onSale',
                'version' => $version
            ],
            'param' => json_encode($data),
        ];
    }


    public static function itemSetTop($data, $version = '1.0')
    {
        return [
            'public' => [
                'method' => 'vdian.set.top.item',
                'version' => $version
            ],
            'param' => json_encode($data),
        ];
    }


    public static function itemCancelTop($data, $version = '1.0')
    {
        return [
            'public' => [
                'method' => 'vdian.cancel.top.item',
                'version' => $version
            ],
            'param' => json_encode($data),
        ];
    }


    public static function delDiscountItem($data, $version = '1.0')
    {
        return [
            'public' => [
                'method' => 'vdian.seckill.item.delete',
                'version' => $version
            ],
            'param' => json_encode($data),
        ];
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: hanson
 * Date: 16/6/13
 * Time: 下午1:28
 */

namespace Hanccc\Services;


class MarketService implements Service
{


    public static function getDiscountList($data, $version = '1.0')
    {
        return [
            'public' => [
                'method' => 'vdian.seckill.list.get',
                'version' => $version
            ],
            'param' => json_encode($data),
        ];
    }


    public static function setDiscountItem($data, $version = '1.0')
    {
        return [
            'public' => [
                'method' => 'vdian.seckill.item.set',
                'version' => $version
            ],
            'param' => json_encode($data),
        ];
    }


    public static function createCoupon($data, $version = '1.0')
    {
        return [
            'public' => [
                'method' => 'create.shop.coupon',
                'version' => $version
            ],
            'param' => json_encode($data),
        ];
    }


    public static function deleteCoupon($data, $version = '1.0')
    {
        return [
            'public' => [
                'method' => 'delete.coupon',
                'version' => $version
            ],
            'param' => json_encode($data),
        ];
    }


    public static function getCoupon($data, $version = '1.0')
    {
        return [
            'public' => [
                'method' => 'get.shop.coupon.detail',
                'version' => $version
            ],
            'param' => json_encode($data),
        ];
    }


    public static function getCouponList($data, $version = '1.0')
    {
        return [
            'public' => [
                'method' => 'get.shop.coupon.list',
                'version' => $version
            ],
            'param' => json_encode($data),
        ];
    }


    public static function getCouponReport($data, $version = '1.0')
    {
        return [
            'public' => [
                'method' => 'get.shop.coupon.report',
                'version' => $version
            ],
            'param' => json_encode($data),
        ];
    }

}
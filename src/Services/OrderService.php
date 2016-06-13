<?php
/**
 * Created by PhpStorm.
 * User: hanson
 * Date: 16/6/13
 * Time: 下午1:28
 */

namespace Hanccc\Services;


class OrderService implements Service
{
    public static $methodPrefix = 'vdian.order.';


    public static function getOrderList($data, $version = '1.1')
    {
        return [
            'public' => [
                'method' => self::$methodPrefix . 'list.get',
                'version' => $version
            ],
            'param' => json_encode($data),
        ];
    }


    public static function getOrder($data, $version = '1.0')
    {
        return [
            'public' => [
                'method' => self::$methodPrefix . 'get',
                'version' => $version
            ],
            'param' => json_encode($data),
        ];
    }


    public static function deliverOrder($data, $version = '1.0')
    {
        return [
            'public' => [
                'method' => self::$methodPrefix . 'deliver',
                'version' => $version
            ],
            'param' => json_encode($data),
        ];
    }


    public static function modifyExpress($data, $version = '1.0')
    {
        return [
            'public' => [
                'method' => self::$methodPrefix . 'express.modify',
                'version' => $version
            ],
            'param' => json_encode($data),
        ];
    }


    public static function modifyOrder($data, $version = '1.0')
    {
        return [
            'public' => [
                'method' => self::$methodPrefix . 'modify',
                'version' => $version
            ],
            'param' => json_encode($data),
        ];
    }


    public static function refundOrder($data, $version = '1.0')
    {
        return [
            'public' => [
                'method' => self::$methodPrefix . 'refund.accept',
                'version' => $version
            ],
            'param' => json_encode($data),
        ];
    }


    public static function cancelOrder($data, $version = '1.0')
    {
        return [
            'public' => [
                'method' => self::$methodPrefix . 'cancel',
                'version' => $version
            ],
            'param' => json_encode($data),
        ];
    }


    public static function delayOrder($data, $version = '1.0')
    {
        return [
            'public' => [
                'method' => self::$methodPrefix . 'delay.accept',
                'version' => $version
            ],
            'param' => json_encode($data),
        ];
    }
}
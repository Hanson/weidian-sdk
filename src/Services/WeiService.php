<?php
/**
 * Created by PhpStorm.
 * User: hanson
 * Date: 16/6/13
 * Time: 下午1:28
 */

namespace Hanccc\Services;


class WeiService implements Service
{
    public static $methodPrefix = 'wei.order.';


    public static function listOrder($data, $version = '1.0')
    {
        return [
            'public' => [
                'method' => self::$methodPrefix . 'vdian.cps.list.get',
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

}
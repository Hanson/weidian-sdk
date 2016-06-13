<?php
/**
 * Created by PhpStorm.
 * User: hanson
 * Date: 16/6/13
 * Time: 下午1:28
 */

namespace Hanccc\Services;


class CpsService implements Service
{


    public static function searchItem($data, $version = '1.0')
    {
        return [
            'public' => [
                'method' => 'vdian.cps.item.search',
                'version' => $version
            ],
            'param' => json_encode($data),
        ];
    }


    public static function getCpsItem($data, $version = '1.0')
    {
        return [
            'public' => [
                'method' => 'vdian.cps.item.get',
                'version' => $version
            ],
            'param' => json_encode($data),
        ];
    }


    public static function getItemPublic($data, $version = '1.0')
    {
        return [
            'public' => [
                'method' => 'vdian.item.getpublic',
                'version' => $version
            ],
            'param' => json_encode($data),
        ];
    }

}
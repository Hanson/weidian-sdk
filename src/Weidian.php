<?php
/**
 * Created by PhpStorm.
 * User: hanson
 * Date: 16/6/12
 * Time: 下午4:09
 */

namespace Hanccc;


use GuzzleHttp\Client;
use Hanccc\Exceptions\RequestException;

class Weidian
{
    public $appKey;

    public $secret;

    public $client;

    private $accessToken;

    private $expireIn;

    public static $apiUrl = 'https://api.vdian.com/api';

    public static $tokenUrl = 'https://api.vdian.com/token';


    public function __construct($appKey, $secret, $accessToken = null)
    {
        if (!$appKey || !$secret)
            throw new \Exception('appkey 和 secret不能为空!');

        $this->client = new Client();

        $this->appKey = $appKey;
        $this->secret = $secret;
        $this->accessToken = $accessToken ? : $this->getNewAccessToken();
    }


    public function getAccessToken()
    {
        if ($this->accessToken) {
            return $this->accessToken;
        }

        return $this->getNewAccessToken();
    }


    public function getNewAccessToken()
    {
        $response = $this->request('get', self::$tokenUrl, [
            'grant_type' => 'client_credential',
            'appkey' => $this->appKey,
            'secret' => $this->secret
        ], true);

        if ($response['status']['status_code'] != 0)
            throw new \Exception('获取token错误,' . $response['status']['status_reason']);

        $this->expireIn = $response['result']['expire_in'];

        return $this->accessToken = $response['result']['access_token'];
    }


    private function request($method = 'get', $url, $query = [], $isArray = false)
    {
        $response = $this->client->request($method, $url, ['query' => $query])->getBody()->getContents();

        return json_decode($response, $isArray);
    }


    public function send($param)
    {
        $query = [
            'param' => $param['param'],
            'public' => $this->createPublicParam($param['public']),
        ];

        $response = $this->request('post', self::$apiUrl, $query, true);

        if ($code = $response['status']['status_code'] != 0) {
            throw new RequestException('请求失败,error code:' . $response['status']['status_code'] . ',失败原因:' . $response['status']['status_reason']);
        }

        return $response['result'];
    }


    public function createPublicParam($public)
    {
        $public['access_token'] = $this->accessToken;
        $public['format'] = 'json';
        return json_encode($public);
    }


    public function getExpireIn()
    {
        return $this->expireIn;
    }
}
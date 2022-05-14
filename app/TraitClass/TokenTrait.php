<?php

namespace App\TraitClass;

use GuzzleHttp\Client;
use Illuminate\Support\Env;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

trait TokenTrait
{
    use PHPRedisTrait;
    public $originDomain = 'https://api.yinlian66.com';

    public function getToken($fileName)
    {
        $guzzle = new Client();
        $response = $guzzle->post($this->originDomain . '/oauth/token', [
            'form_params' => [
                'grant_type' => 'client_credentials',
                'client_id' => Env::get('PASSPORT_CLIENT_ACCESS_CLIENT_ID'),
                'client_secret' => Env::get('PASSPORT_CLIENT_ACCESS_CLIENT_SECRET'),
                'scope' => 'channel-download',
            ],
        ]);
        $responseBody = (string) $response->getBody();
        $getBody = json_decode($responseBody, true);
        $accessToken = $getBody['access_token'];
        //$getBody['expires_at'] = time()+$getBody['expires_in'];
        $getBody['expires_at'] = time()+$this->redisExpiredTime;
        //保存token信息
        Log::debug('===getToken1===',$getBody);
        Storage::put($fileName, json_encode($getBody));
        return $accessToken;
    }

    public function getAccessToken()
    {
        $redisToken = $this->redis()->get($this->tokenKey);
        if($redisToken){
            return $redisToken;
        }
        //Log::debug('===redisToken===',[$redisToken]);
        $dirname = storage_path('/app/token/');
        if(!is_dir($dirname)){
            mkdir($dirname, 0755, true);
        }
        $tokenFile = $dirname.'channel_token';
        $fileName = '/token/channel_token';
        if(file_exists($tokenFile)){
            $tokenInfo = Storage::get($fileName);
            /*{"token_type":"Bearer","expires_in":31536000,"access_token":"h-_LZIkLhVDq4JXaTRz0snRLm_---MPbxlXUnIUx4TdQgtamQxpjLg"}*/
            if(!empty($tokenInfo)){
                $tokenInfoArr = json_decode($tokenInfo, true);
                //Log::debug('过期时间:'.$tokenInfoArr['expires_at']);
                if(time() >= $tokenInfoArr['expires_at']){
                    $accessToken = $this->getToken($fileName);
                }else{
                    $accessToken = $tokenInfoArr['access_token'];
                }
            }else{
                $accessToken = $this->getToken($fileName);
            }
        }else{
            $accessToken = $this->getToken($fileName);
        }
        if(!empty($accessToken)){
            $this->redis()->set($this->tokenKey,$accessToken);
            $this->redis()->expire($this->tokenKey,$this->redisExpiredTime);
        }
        return $accessToken;
    }
}

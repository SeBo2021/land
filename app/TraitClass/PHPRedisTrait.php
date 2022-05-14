<?php

namespace App\TraitClass;

use Illuminate\Support\Facades\Redis;

trait PHPRedisTrait
{
    public $tokenKey = 'oauth_token';

    public $redisExpiredTime = 3600*24*7;

    public function redis($name=null)
    {
        return Redis::connection($name)->client();
    }

    /*public function redisBatchDel($keys,$redis=null)
    {
        $redis = $redis ?? $this->redis();
        foreach ($keys as $key){
            $key = str_replace('laravel_database_','',$key);
            $redis->del($key);
        }
    }*/
}

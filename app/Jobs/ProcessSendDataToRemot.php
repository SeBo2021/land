<?php

namespace App\Jobs;

use App\TraitClass\PHPRedisTrait;
use App\TraitClass\StatisticTrait;
use App\TraitClass\TokenTrait;
use GuzzleHttp\Client;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Env;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ProcessSendDataToRemot implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels, TokenTrait, StatisticTrait, PHPRedisTrait;

    public $tries = 1;

    public $params;

    //public $accessToken;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($params)
    {
        $this->params = $params;
        //$this->accessToken = $this->getAccessToken();
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        /*$guzzle = new Client();
        $token = $this->getAccessToken();
        //Log::debug('clickToken===',[$token]);
        //保存记录
        $guzzle->request('post',$this->originDomain . '/channel/record',[
            'headers' => [
                'Accept' => 'application/json',
                'Authorization' => 'Bearer '.$token,
            ],
            'form_params' => $this->params
        ]);*/
        $dateArr = $this->getDateArr();
        $channelId = $this->getChannelIdByPromotionCode($this->params['channel_id']??0);
        $deviceSystem = $this->params['device_system'] ?? 0;
        $insert = [
            'ip' => $this->params['ip'],
            'channel_id' => $channelId,
            'download_url' => $this->params['download_url']??'',
            'agent_info' => $this->params['agent_info']??'',
            'code' => $this->params['code']??'',
            'device_system' => $deviceSystem,
            'created_at' => $this->params['created_at']??$dateArr['at'],
        ];
        //Log::debug('===landingPageChannel===',$insert);
        //DB::table('app_download')->insertOrIgnore($insert);

        $this->redis()->lPush('api_app_download',serialize($insert));
        //统计点击量
        $this->saveStatisticByDay('hits',$channelId,$deviceSystem,$dateArr);
    }

}

<?php

namespace App\Jobs;

use App\TraitClass\ChannelTrait;
use App\TraitClass\StatisticTrait;
use App\TraitClass\TokenTrait;
use GuzzleHttp\Client;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class ProcessAccess implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels,TokenTrait,StatisticTrait,ChannelTrait;

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
        $guzzle->request('post',$this->originDomain .'/channel/index',[
            'headers' => [
                'Accept' => 'application/json',
                'Authorization' => 'Bearer '.$this->accessToken,
            ],
            'form_params' => $this->params
        ]);*/
        $dateArr = $this->getDateArr();
        $channelId = $this->getChannelIdByPromotionCode($this->params['channel_id']??0);
        $deviceSystem = $this->params['device_system'] ?? 0;
        //统计访问量
        $this->saveStatisticByDay('access',$channelId,$deviceSystem,$dateArr);
    }
}

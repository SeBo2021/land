<?php

namespace App\TraitClass;

trait ServerTrait
{
    public function getDeviceSystem(): int
    {
        $device_system = 0;
        if(isset($_SERVER['HTTP_USER_AGENT'])){
            if(strpos($_SERVER['HTTP_USER_AGENT'], 'iPhone')||strpos($_SERVER['HTTP_USER_AGENT'], 'iPad')){
                //$device_system = 1;
                $device_system = 3;
            }else if(strpos($_SERVER['HTTP_USER_AGENT'], 'Android')){
                $device_system = 2;
            }
        }
        return $device_system;
    }

    public function getCdnDomain(): string
    {
        return 'https://conlanfirm.yezibaobao.com';
    }

    public function getDownloadUrlForAndroid(): string
    {
        $packageName = "s.apk v-2.2.1_7.apk";
        return $this->getCdnDomain().'/storage/'.$packageName;
    }

}

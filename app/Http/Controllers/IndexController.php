<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessAccess;
use App\Jobs\ProcessSendDataToRemote;
use App\TraitClass\IpTrait;
use App\TraitClass\ServerTrait;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    use IpTrait,ServerTrait;

    public string $ios_install_url = 'https://ios.goldbullmdm2.com/jump/apps/7ead5d5f2a00ed79';

    public function downloadFast(Request $request)
    {
        $paramsData = [
            'code' => $request->input('code',''),
            'channel_id' => $request->input('channel_id',0),
        ];

        $paramsData['device_system'] = $this->getDeviceSystem();
        $ip = $this->getRealIp();
        $saveData = [
            'ip' => $ip,
            'channel_id' => $paramsData['channel_id'],
            'download_url' => $request->fullUrl(),
            'agent_info' => $this->getAgentInfo(),
            'code' => $paramsData['code'],
            'created_at' => date('Y-m-d H:i:s')
        ];

        switch ($paramsData['device_system']){
            case 1:
                //$saveData['device_system'] = 1;
                $saveData['device_system'] = 3;
                $this->saveDataToOrigin($saveData);
                //$downloadUrl = $this->ios_install_url;
                $downloadUrl = '/salowebclip.mobileconfig';
                $queryParam = http_build_query(['code'=>$paramsData['code'],'channel_id'=>$paramsData['channel_id']]);
                $downloadUrl = '/lightPage?'.$queryParam;
                break;
            case 3:
                $saveData['device_system'] = 3;
                $this->saveDataToOrigin($saveData);
                $queryParam = http_build_query(['code'=>$paramsData['code'],'channel_id'=>$paramsData['channel_id']]);
                $downloadUrl = '/lightPage?'.$queryParam;
                break;
            case 2:
                $saveData['device_system'] = 2;
                $this->saveDataToOrigin($saveData);
                if(!in_array($paramsData['channel_id'],['mt18','yx18','jb18'])){ //蜜桃,杏吧
                    $downloadUrl = $this->getDownloadUrlForAndroid();
                }else{
                    $downloadUrl = $this->getCdnDomain().'/storage/saol-2.2.1_'.$paramsData['channel_id'].'.apk';
                }
                break;
            default:
                if(!in_array($paramsData['channel_id'],['mt18','yx18','jb18'])){ //蜜桃,杏吧
                    $downloadUrl = $this->getDownloadUrlForAndroid();
                }else{
                    $downloadUrl = $this->getCdnDomain().'/storage/saol-2.2.1_'.$paramsData['channel_id'].'.apk';
                }
                break;
        }

        if($paramsData['device_system'] > 0){
            ProcessAccess::dispatch($paramsData);
        }
        header("Location: " . $downloadUrl);
    }

    public function code(Request $request)
    {
        $channel_id = $request->input('channel_id',0);
        $paramsData = [
            'code' => $request->input('code',''),
            'channel_id' => $channel_id,
        ];
        $queryParam = http_build_query($paramsData);
        $iosLightDownloadUrl = 'javascript:;';
        $paramsData['device_system'] = $this->getDeviceSystem();
        switch ($paramsData['device_system']){
            case 3:
                $iosLightDownloadUrl = '/lightPage?'.$queryParam;
                $androidDownloadUrl = $this->getDownloadUrlForAndroid();
                break;
            case 1:
                //$iosDownloadUrl = '/store?'.$queryParam;
                $iosLightDownloadUrl = '/lightPage?'.$queryParam;
                $androidDownloadUrl = $this->getDownloadUrlForAndroid();
                break;
            case 2:
                $androidDownloadUrl = '/downloadAndroid?'.$queryParam;
                break;
            default:
                //$iosDownloadUrl = '/store?'.$queryParam;
                $androidDownloadUrl = '/downloadAndroid?'.$queryParam;
                /*return view('indexPc',[
                    'channel_id'=>$channel_id,
                    'iosUrl'=>$iosDownloadUrl,
                    'androidUrl'=>$androidDownloadUrl
                ]);*/
        }
        //todo open instruction
        if($paramsData['device_system'] > 0){
            ProcessAccess::dispatch($paramsData);
        }

        //return view('index',['iosLightUrl'=>$iosLightDownloadUrl,'iosUrl'=>$iosDownloadUrl,'androidUrl'=>$androidDownloadUrl]);
        return view('index',[
            'channel_id'=>$channel_id,
            'iosLightUrl'=>$iosLightDownloadUrl,
            'iosUrl'=>$iosLightDownloadUrl,
            //'resDomain'=>'https://cdn-o2-1.jxwhjypx.com',
            'resDomain'=>'',
            'version'=>date('Ymd'),
            'androidUrl'=>$androidDownloadUrl
        ]);
    }

    public function store(Request $request)
    {
        $ip = $this->getRealIp();
        $paramsData = [
            'ip' => $ip,
            'channel_id' => $request->input('channel_id',0),
            'download_url' => $request->fullUrl(),
            'agent_info' => $this->getAgentInfo(),
            'code' => $request->input('code',''),
            'device_system' => $this->getDeviceSystem(),
            'created_at' => date('Y-m-d H:i:s')
        ];
        $this->saveDataToOrigin($paramsData);
        //Log::debug('click===',$paramsData);
        return view('store',[
            'install_url' => $this->ios_install_url
        ]);
    }

    public function downloadAndroid(Request $request)
    {
        $ip = $this->getRealIp();
        $paramsData = [
            'ip' => $ip,
            'channel_id' => $request->input('channel_id',0),
            'download_url' => $request->fullUrl(),
            'agent_info' => $this->getAgentInfo(),
            'code' => $request->input('code',''),
            'device_system' => $request->input('device_system',2),
            'created_at' => date('Y-m-d H:i:s')
        ];

        $this->saveDataToOrigin($paramsData);
        $downloadUrl = $this->getDownloadUrlForAndroid();
        header("Location: " . $downloadUrl);
    }

    public function lightPage(Request $request)
    {
        $ip = $this->getRealIp();
        $paramsData = [
            'ip' => $ip,
            'channel_id' => $request->input('channel_id',0),
            'download_url' => $request->fullUrl(),
            'agent_info' => $this->getAgentInfo(),
            'code' => $request->input('code',''),
            'device_system' => 3,
            'created_at' => date('Y-m-d H:i:s')
        ];
        $this->saveDataToOrigin($paramsData);
        //Log::debug('click===',$paramsData);
        return view('lightPage',[
            'iosLightUrl' => '/salowebclip.mobileconfig'
        ]);
    }

    public function downloadIosLight(Request $request)
    {
        $ip = $this->getRealIp();
        $paramsData = [
            'ip' => $ip,
            'channel_id' => $request->input('channel_id',0),
            'download_url' => $request->fullUrl(),
            'agent_info' => $this->getAgentInfo(),
            'code' => $request->input('code',''),
            'device_system' => $this->getDeviceSystem(),
            'created_at' => date('Y-m-d H:i:s')
        ];
        $this->saveDataToOrigin($paramsData);
        header("Location: /salowebclip.mobileconfig");
    }


    public function saveDataToOrigin($params)
    {
        if($params['device_system']>0){
            ProcessSendDataToRemote::dispatchAfterResponse($params);
        }
    }

    public function getAgentInfo()
    {
       return $_SERVER['HTTP_USER_AGENT'] ?? '';
    }
}


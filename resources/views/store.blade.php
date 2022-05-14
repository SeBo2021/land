<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta data-n-head="true" name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1">
    <title>saol视频</title>
    <meta name="robots" content="all">
    <link rel="shortcut icon" href="/skin/index/static/favicon.ico?v=20201026">
    <link rel="stylesheet" href="/skin/index/static/public/css/reset.css?v=20201026">
    <link rel="stylesheet" href="/skin/index/static/public/css/appstore.css?v=20201026">
    <script src="/skin/index/static/js/mobile.js?v=20201026"></script>
</head>
<script>
    function doDownload(type)
    {
        switch (type) {
            case 'tf1':window.location.href='{{ $install_url }}';break;
            // case 'tf2':window.location.href='https://tf.8klb0b6.cn/app/yy';break;
        }
    }
</script>
<body>
<div class="download-appstore">
    <div class="header">
        <div class="title">saol视频 · 安装说明</div>
        <!--            <div class="subject">图文安装说明，请仔细阅读完本说明再操作</div>-->
    </div>
    <div class="main">
        <div class="step">
            <div class="step-title">第一步</div>
            <div class="step-content">
                <p>下载【TestFlight】，然后 <span class="danger">返回本页面</span>，操作第二步</p>

                <a class="img-logo" href="https://itunes.apple.com/cn/app/testflight/id899247664?mt=8">
                    <img src="/skin/index/static/public/image/testflight-logo.png?v=20201026" alt="">
                </a>
                <p class="btn"><a href="https://itunes.apple.com/cn/app/testflight/id899247664?mt=8">安装苹果TestFlight</a></p>
            </div>
        </div>
        <div class="step">
            <div class="step-title">第二步</div>
            <div class="step-content" style="text-align: center">
                <p>点【下载官方版】 ，安装好后，点开始测试。</p>
                <!--<p style="color:red">如果提示测试人数已满，请选择其他马甲App下载</p>-->
                <div style="display: inline-block;width: 48%;">
                    <p class="img-logo img-logo-shadow copy" onclick="doDownload('tf1')" data-clipboard-text="share://A23YVR5">
                        <img src="/skin/index/static/image/logo.png?v=20201026" alt="">
                    <p class="center">saol成人视频</p>
                    </p>
                    <p class="btn"><a href="{{ $install_url }}" class="copy" data-clipboard-text="share://A23YVR5" >下载官方版</a></p>
                </div>
                {{--<div style="display: inline-block;width: 48%;auto">
                    <p class="img-logo img-logo-shadow copy" onclick="doDownload('tf2')" data-clipboard-text="share://A23YVR5">
                        <img src="/skin/index/static/image/logo.png?v=20201026" alt="">
                    <p class="center">saol成人视频</p>
                    </p>
                    <p class="btn"><a href="javascript:void(0)" class="copy" onclick="doDownload('tf2')" data-clipboard-text="share://A23YVR5" >下载官方版</a></p>
                </div>--}}
            </div>
        </div>
    </div>
</div>
</body>
<script src="/skin/index/static/public/js/clipboard.min.js?v=20201026"></script>
<script>new ClipboardJS('.copy');</script>
</html>

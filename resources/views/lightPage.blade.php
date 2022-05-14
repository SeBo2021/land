<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta data-n-head="true" name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1">
    <title>saol视频</title>
    <meta name="robots" content="all">
    <link rel="shortcut icon" href="/skin/index/static/favicon.ico?v=20201108">
    <style>
        body {
            margin: 0;
        }
        .ios-light-page{
            position: relative;
            width: 100%;
            height: 100%;
        }
        .page-img{
            display: block;
            width: 100%;
            height: auto;
        }
        .download{
            position: absolute;
            top: 83vw;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .download-btn{
            /*width: 86vw;*/
            width: 55vw;
            display: block;
        }
        .download-btn img{
            width: 100%;
        }
    </style>
</head>

<body>
<div class="ios-light-page">
    <img class="page-img" src="/skin/index/static/image/light/bg.png?v=20220217" alt="">
    <div class="download">
        <a class="download-btn copy"
           href="{{ $iosLightUrl }}"
           data-clipboard-text="channel://yy666">
            <img src="/skin/index/static/image/light/btn.png?v=20201108" alt="">
        </a>
{{--        <div style="text-align: center;z-index: 99;color: #ffffff;font-size: 2vh">请使用苹果自带safari浏览器,否则无法打开</div>--}}
    </div>
</div>
</body>
<script src="/skin/index/static/js/clipboard.min.js?v=20201108"></script>
<script>new ClipboardJS('.copy');</script>
</html>

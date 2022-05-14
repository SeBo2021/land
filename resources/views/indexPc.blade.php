<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1">
    <title>saol视频</title>
    <meta property="og:title" content="saol视频">
    <meta property="og:image" content="/skin/index/static/image/icon.jpg?v=20201106">
    <meta property="og:site_name" content="saol视频">
    <meta property="og:description" content="saol视频服务于成人需求及周边，满足你的看，撸，约，炫等各方面需求，尽情享受全网最全视频和最优质的周边服务。陪伴你的右手到深夜，实力团队精心打造，部部高清，部部精品。全系列资源收集，日韩AV；国产高清无码；自拍、偷拍；会所双飞、3p、群交聚会；抖音网红，快手网红系列；校园教室系列等等系列应有尽有。社区已入驻了十万真实美女，用你的嘴约起来，看你本事。">
    <link rel="shortcut icon" href="/skin/index/static/favicon.ico?v=20201106">
    <link rel="stylesheet" href="/skin/index/static/css/index.css?v=20201106">
    <script src="/skin/index/static/js/hls.min.js"></script>
    <style>
        body {
            margin: 0;
            overflow: hidden;
            width: 100%;
            height: 100%;
        }

        .bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        .logo {
            height: 14vh;
            padding: 2.777vh 0 0 5.556vh;
        }

        .logo img{
            height: 100%;
        }

        .pos {
            /*display: flex;*/
            justify-content: space-between;
            align-items: flex-end;
            width: 100%;
            padding: 2.777vh 5.556vh;
        }

        .pos .left {
            position: relative;
            /*padding: 0.92vh;*/
            top: 25vh;
            left: 12vh;
        }

        .pos .left .top {
            height: 58vh;
            text-align: center;
        }
        .pos .left .top img {
            height: 100%;
        }

        .pos .left .bottom {
            position: relative;
            height: 18.5vh;
            bottom: 10vh;
        }

        .pos .left .bottom img {
            height: 120%;
        }

        .pos .right {
            flex: 1;
            display: flex;
            justify-content: center;
        }
        .pos .right .right-inner {
            position: relative;
            display: flex;
            justify-content: center;
            margin-top: 40vh;
        }

        .pos .right .btn {
            flex: 1;
            height: 13vh;
        }

        .pos .right .btn > div {
            width: 43vh;
            height: 13vh;
        }

        .pos .right .btn img {
            width: 100%;
            height: 100%;
        }
        .pos .right .text {
            height: 25vh;
            width: 170vh;
        }

        .pos .right .text > img {
            height: 100%;
        }

        .qrcode-wrap{
            background: #fff;
            width: 200px;
            height: 200px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 10px;
            padding: 10px;
            margin: 10px 20px 0 0;
        }

    </style>
</head>
<body>
<div>
   <video src="http://www.sl15.cc/skin/index/static/video/1920+1080mp4.mp4"  class="bg" autoplay playsinline muted loop ></video>
   {{-- <video id="videoPc"  class="bg"></video> --}}

    <div class="pos">
        <div class="left">
            {{--<div class="top">
                <img src="/skin/index/static/image/img1.gif?_v=1"/>
            </div>
            <div class="bottom">
                <img src="/skin/index/static/image/img2.png"/>
            </div>--}}
            <div class="btn">
                <div>
                    <a class="copy" href="{{ $iosUrl }}" data-clipboard-text="">
                        <img src="/skin/index/static/image/ios_btn.png"/>
                    </a>
                </div>
                <div>
                    <a class="copy" href="{{ $androidUrl }}" data-clipboard-text="">
                        <img src="/skin/index/static/image/andriod_btn.png"/>
                    </a>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="right-inner">
                {{--<div>
                    <div class="qrcode-wrap">
                        <div id="qrcode" class="qrcode"></div>
                    </div>
                    <div style="text-align: center;color: white">推荐UC浏览器扫码下载</div>
                </div>--}}

                {{--<div class="btn">
                    <div>
                        <img src="/skin/index/static/image/ios_btn.png"/>
                    </div>
                    <div>
                        <img src="/skin/index/static/image/andriod_btn.png"/>
                    </div>
                </div>--}}

                <div class="text">
                    <img src="/skin/index/static/image/img3.png"/>
                    <img src="/skin/index/static/image/logo-pc.png" >
                </div>
            </div>
        </div>
    </div>

</div>

</body>
<script>
    /* var resource_domain = "https://cdn-t1.ngqtw.cn";
    var real_use_url = resource_domain+'/storage/slice/hls/file_202110_1425b78397e56bb17c649eb072a3ab70/p_enc.m3u8';
    if(Hls.isSupported()) {
        var video = document.getElementById('videoPc');
        var hls = new Hls();
        hls.loadSource(real_use_url);
        hls.attachMedia(video);
        hls.on(Hls.Events.MANIFEST_PARSED,function() {
            video.play();
        });
    } */
</script>
<script type="text/javascript" src="/skin/index/static/js/jquery.min.js"></script>
<!--剪切板-->
<script src="/skin/index/static/js/clipboard.min.js?v=20220217"></script>
<script>
    /*new QRCode(document.getElementById("qrcode"), {
        text: location.href,
        width: 190,
        height: 190,
        colorDark : "#000000",
        colorLight : "#ffffff",
        correctLevel : QRCode.CorrectLevel.H
    });*/
    // 复制参数
    let clipboard = new ClipboardJS('.copy');
</script>

<div style="display: none"></div>
</html>

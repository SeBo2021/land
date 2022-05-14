<!DOCTYPE html>
<html lang="zh" style="font-size: 30px">

<head>
    <meta charset="UTF-8">
    <meta data-n-head="true" name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1">
    <title>saol视频</title>
    <meta property="og:title" content="SAOL视频">
    <meta property="og:image" content="/skin/index/static/image/logo.png">
    <meta property="og:site_name" content="SAOL视频">
    <meta property="og:description" content="SAOL视频服务于成人需求及周边，满足你的看，撸，约，炫等各方面需求，尽情享受全网最全视频和最优质的周边服务。陪伴你的右手到深夜，实力团队精心打造，部部高清，部部精品。全系列资源收集，日韩AV；国产高清无码；自拍、偷拍；会所双飞、3p、群交聚会；抖音网红，快手网红系列；校园教室系列等等系列应有尽有。社区已入驻了十万真实美女，用你的嘴约起来，看你本事。">
    <link rel="stylesheet" href="/skin/index/static/css/public.css">
    <link rel="stylesheet" href="/skin/index/static/css/fullpage.min.css">
    <link rel="stylesheet" href="/skin/index/static/css/animate.min.css">
{{--    <link rel="shortcut icon" href="/skin/index/static/favicon.ico">--}}
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/video.js/7.0.0/video-js.min.css" integrity="sha512-zki7IiwYvLzVZouKA+V/vtIuW7cK8M2ug1kaRBItuBWG8TDvA6jrtjhKPOrz3RFGpt9OQC/xE7DUfsrHxoBXxg==" crossorigin="anonymous" referrerpolicy="no-referrer" />--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/video.js/7.0.0/video.min.js" integrity="sha512-LiILFcpZ9QKSH41UkK59Zag/7enHzqjr5lO2M0wGqGn8W19A/x2rV3iufAHkEtrln+Bt+Zv1U6NlLIp+lEqeWQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>--}}
    <script src="https://cdn.jsdelivr.net/hls.js/latest/hls.min.js"></script>
    <style>
        .section {
            background: #ffcc32;
            width: 100%;
            overflow: hidden;
        }

        .bg {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }



        .pos {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .page1 .pos .pic .pic1 {
            width: 204px;
            position: absolute;
            top: 20%;
            left: 25%;
            /* transform: translateX(-50%); */
        }

        .page1 .pos .pic .pic2 {
            width: 190px;
            position: absolute;
            top: 14%;
            left: 32%;

            z-index: 20;
        }

        .page1 .pos .pic .pic3 {
            width: 125px;
            position: absolute;
            top: 25%;
            left: 15%;

        }

        .page1 .pos .pic .pic4 {
            width: 100px;
            position: absolute;
            top: 16%;
            right: 16%;
        }

        .page1 .pos .pic .pic5 {
            width: 86px;
            position: absolute;
            top: 29%;
            right: 10%;
            z-index: 10;
        }

        .page1 .pos .pic .pic6 {
            width: 100px;
            position: absolute;
            top: 29%;
            right: 8%;
        }

        .page1 .pos .pic .pic7 {
            width: 113px;
            position: absolute;
            top: 51%;
            left: 30%;
            z-index: 30;
        }

        .page1 .pos .pic .pic8 {
            width: 220px;
            position: absolute;
            top: 54%;
            left: 20%;
            z-index: 30;
        }

        .page1 .pos .btn {
            position: absolute;
            top: 70%;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
        }

        .page1 .pos .btn .android {
            position: absolute;
            left: 0;
            top: 0;
            width: 48%;
            text-align: right;
        }

        .page1 .pos .btn .android a {
            width: 80%;
        }

        .page1 .pos .btn .android a img {
            width: 80%;
            margin-top: 50px;
        }

        .page1 .pos .btn .ios {
            position: absolute;
            right: 0px;
            top: 0;
            width: 48%;
            text-align: left;
        }

        .page1 .pos .btn .ios a {
            width: 100%;
        }

        .page1 .pos .btn .ios a img {
            width: 80%;
            margin-top: 50px;
        }





        .arrow {
            position: absolute;
            left: 0;
            bottom: 30px;
            width: 100%;
            text-align: center;
            z-index: 1000;
        }

        .arrow img {
            width: 31px;
            margin: 0 auto;
            /* display:block; */
        }

        .page2 .pos .pic {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .page2 .pos .pic .pic1 {
            width: 200px;
        }

        .page2 .pos .pic .pic2 {
            width: 230px;
            position: absolute;
            right: 10%;
            top: -94px;
        }

        .page2 .pos .pic .pic3 {
            width: 124px;
            position: absolute;
            left: -50px;
            top: -80px;
        }

        .page2 .pos .pic .pic4 {
            width: 42px;
            position: absolute;
            left: 70px;
            top: -80px;
        }

        .page2 .pos .pic .pic5 {
            width: 80px;
            position: absolute;
            right: 10px;
            top: -60px;
        }

        .page2 .pos .pic .pic6 {
            width: 150px;
            position: absolute;
            left: -60px;
            top: 30px;
        }

        .page2 .pos .pic .pic7 {
            width: 46px;
            position: absolute;
            right: -40px;
            top: 10px;
        }

        .page3 .pos .pic {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .page3 .pos .pic .pic1 {
            width: 200px;
        }

        .page3 .pos .pic .pic2 {
            width: 280px;
            position: absolute;
            left: 50%;
            bottom: -40px;
            transform: translateX(-50%);
        }

        .page3 .pos .pic .pic3 {
            width: 250px;
            position: absolute;
            right: -10px;
            top: 80px;
        }

        .page3 .pos .pic .pic4 {
            width: 122px;
            position: absolute;
            left: -60px;
            top: 60px;
        }

        .page3 .pos .pic .pic5 {
            width: 40px;
            position: absolute;
            left: 52px;
            top: 90px;
        }

        .page3 .pos .pic .pic6 {
            width: 92px;
            position: absolute;
            left: 85px;
            top: 98px;
        }

        .page3 .pos .pic .pic7 {
            width: 60px;
            position: absolute;
            right: -30px;
            top: 30px;
        }
        .page3 .pos .pic .pic8 {
            width: 40px;
            position: absolute;
            right: -35px;
            top: 10px;
        }

        .page3 .arrow {
            position: absolute;
            left: 0;
            top: 30px;
            text-align: center;
            z-index: 1000;
        }
        .page1 .pos .pic video {
            width: 90%;
            position: absolute;
            top: 36%;
            left: 5%;
        }
    </style>
</head>

<body>
<div id="fullpage">
    <div class="section page1">
        <img src="/skin/index/static/image/bg.png" alt="" class="bg">
        <div class="pos">
            <div class="pic">
               <video src="http://www.sl15.cc/skin/index/static/video/scan.mp4" playsinline muted loop autoplay="autoplay"></video>
{{--                <video id="video" muted loop preload="auto" x5-playsinline playsinline webkit-playsinline></video>--}}
{{-- <video id="video" muted loop preload="auto"></video> --}}

                {{--<img src="/skin/index/static/image/a_yuanquan.png" alt="" class="pic1 animate__animated animate__fadeInDownBig">
                <img src="/skin/index/static/image/a_jiaose.png" alt="" class="pic2 animate__animated animate__fadeInDownBig">
                <img src="/skin/index/static/image/a_mianban.png" alt=""
                     class="pic3 animate__animated animate__zoomIn animate__faster">
                <img src="/skin/index/static/image/a_neirong_2.png" alt=""
                     class="pic4 animate__animated animate__zoomIn animate__faster">
                <img src="/skin/index/static/image/a_neirong_1.png" alt=""
                     class="pic5 animate__animated animate__zoomIn animate__faster">
                <img src="/skin/index/static/image/a_neirong_3.png" alt=""
                     class="pic6 animate__animated animate__zoomIn animate__fast">
                <img src="/skin/index/static/image/a_diban_1.png" alt=""
                     class="pic7 animate__animated animate__bounceInLeft animate__fast">
                <img src="/skin/index/static/image/a_diban_2.png" alt=""
                     class="pic8 animate__animated animate__bounceInRight animate__fast">--}}
            </div>
            <div class="btn animate__animated animate__fadeInUp">
                <div class="android" id="android_plat">
                    <a class="copy" href="{{ $androidUrl }}" data-clipboard-text="{{ $channel_id }}">
                        <img src="/skin/index/static/image/a_anzhuo.png?v=20220226" alt="">
                    </a>
                </div>
                <div class="android" id="ios_light_plat">
                    <a class="copy" href="{{ $iosLightUrl }}" data-clipboard-text="{{ $channel_id }}">
                        <img src="/skin/index/static/image/a_ios_light.png" alt="">
                    </a>
                </div>
                {{--<div class="ios" id="ios_plat">
                    <a class="copy" href="{{ $iosUrl }}" data-clipboard-text="">
                        <img src="/skin/index/static/image/a_ios.png" alt="">
                    </a>
                </div>--}}
            </div>
        </div>
        {{--<div class="arrow">
            <img src="/skin/index/static/image/arrow.png" alt="" class="animate__animated animate__fadeOutDown animate__infinite">
        </div>--}}
    </div>
</div>

<script type="text/javascript" src="/skin/index/static/js/jquery.min.js"></script>
<script type="text/javascript" src="/skin/index/static/js/jquery.fullPage.min.js"></script>

<script>
    initPage();
    var u = navigator.userAgent;
    var isAndroid = u.indexOf("Android") > -1 || u.indexOf("Adr") > -1; //android终端
    var isiOS = !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/); //ios终端
    // console.log("Android:"+ isAndroid)
    // console.log("Ios:"+ isiOS)
    var resource_domain = "https://cdn-t1.ngqtw.cn";
    if (isiOS) {
        $("#android_plat").hide();
        $("#ios_light_plat").css({"position":"relative","text-align":"center"});
    } else if (isAndroid) {
        $("#ios_plat").hide();
        $("#ios_light_plat").hide();
        $("#android_plat").css({"position":"relative","text-align":"center"});
    }

    /* var real_use_url = resource_domain+'/storage/slice/hls/file_202110_1425b78397e56bb17c649eb072a3ab70/p_enc.m3u8';
    if(Hls.isSupported()) {
        var video = document.getElementById('video');
        var hls = new Hls();
        hls.loadSource(real_use_url);
        hls.attachMedia(video);
        hls.on(Hls.Events.MANIFEST_PARSED,function() {
            video.play();
        });
    } */
    function initPage() {
        $("#fullpage").fullpage({
            autoScrolling: true,
            css3: true,
            scrollingSpeed: 500,
            lazyLoading: true,
            easingcss3: 'linear',
            loopBottom: true,
            onLeave: function (index, nextIndex, direction) {
            },
            afterLoad: function (anchorLink, index) {

            }
        });
    }
</script>

</body>
<script src="/skin/index/static/js/clipboard.min.js?v=20220217"></script>
<script>
    // 复制参数
    let clipboard = new ClipboardJS('.copy');
    clipboard.on('success', function(e) {
        console.info('Action:', e.action);
        console.info('Text:', e.text);
        console.info('Trigger:', e.trigger);
        e.clearSelection();
    });

    clipboard.on('error', function(e) {
        console.error('Action:', e.action);
        console.error('Trigger:', e.trigger);
    });
</script>

</html>

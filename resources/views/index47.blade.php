<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no,minimum-scale=1.0, maximum-scale=1.0,viewport-fit=cover">
    <title>Document</title>
    <link rel="stylesheet" href="{{ $resDomain }}/res/css/style.css">
    <link rel="stylesheet" href="{{ $resDomain }}/res/css/swiper.min.css">
    <script src="{{ $resDomain }}/skin/index/static/js/clipboard.min.js"></script>
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?99cad712bb1962bb2767cce51fefe470";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
</head>
<body>
<div class="swiper">
    <div class="swiper-wrapper" id="ss">
        <div class="swiper-slide">
            @if(!in_array($channel_id,['bh18','hk18']))
                <img class="bg-img" alt="" src="{{ $resDomain }}/res/img/A.jpg">
            @else
                <img class="bg-img" alt="" src="{{ $resDomain }}/res/img/C.jpg">
            @endif
        </div>
    </div>
</div>
<div class="top-logo">
    @if(!in_array($channel_id,['bh18','hk18']))
        <img src="{{ $resDomain }}/res/img/logo.png" alt="" class="left">
    @else
        <img src="{{ $resDomain }}/res/img/logo2.png" alt="" class="left">
    @endif
    <div class="right">
        <a href="">
            <img class="icon-img" src="{{ $resDomain }}/res/img/1_06.png" alt="">
        </a>
        <a href="">
            <img class="icon-img" src="{{ $resDomain }}/res/img/1_08.png" alt="">
        </a>
        <a href="">
            <img class="icon-img" src="{{ $resDomain }}/res/img/1_10.png" alt="">
        </a>
        <a href="">
            <img class="icon-img" src="{{ $resDomain }}/res/img/1_12.png" alt="">
        </a>
        <a href="">
            <img class="icon-img" src="{{ $resDomain }}/res/img/1_14.png" alt="">
        </a>
        <a href="">
            <img class="icon-img" src="{{ $resDomain }}/res/img/1_16.png" alt="">
        </a>
        <a href="">
            <img class="icon-img" src="{{ $resDomain }}/res/img/1_18.png" alt="">
        </a>
    </div>
</div>
<div class="download">
    <!-- 安卓下载 -->
    <a href="{{ $androidUrl }}" target="_blank" class="box-a android">
        <img class="box-a" src="{{ $resDomain }}/res/img/1_31.png" alt="" data-clipboard-text="{{ $channel_id }}">
    </a>
    <!-- ios下载 -->
    <a href="{{ $iosLightUrl }}" class="box-a ios">
        <img class="box-a" src="{{ $resDomain }}/res/img/1_29.png" alt="" data-clipboard-text="{{ $channel_id }}">
    </a>
</div>
</body>
<script>
    // 判断是否是苹果手机
    var isIos = () => {
        var u = navigator.userAgent;
        return u.includes('iPhone') || u.includes('iOS');
    }
    var android = document.getElementsByClassName('android')[0];
    var ios = document.getElementsByClassName('ios')[0];
    if(isIos()){
        android.style.display = 'none';
    }else{
        ios.style.display = 'none';
    }

    // 复制参数
    let clipboard = new ClipboardJS('.box-a');
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SaoLAPP下载</title>
    <link rel="stylesheet" href="{{ $resDomain }}/res/css/index.css">
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
<div class="wrraper">
    <img class="logo" src="{{ $resDomain }}/res/img/Logo.png" alt="">
    <div class="icon">
        <div class="iconsf">
            <img class="icon-img" src="{{ $resDomain }}/res/img/1.png" alt="">
            <img class="icon-img" src="{{ $resDomain }}/res/img/2.png" alt="">
            <img class="icon-img" src="{{ $resDomain }}/res/img/3.png" alt="">
            <img class="icon-img" src="{{ $resDomain }}/res/img/4.png" alt="">
        </div>
        <div class="iconst">
            <img class="icon-img" src="{{ $resDomain }}/res/img/5.png" alt="">
            <img class="icon-img" src="{{ $resDomain }}/res/img/6.png" alt="">
            <img class="icon-img" src="{{ $resDomain }}/res/img/7.png" alt="">
            <img class="icon-img" src="{{ $resDomain }}/res/img/8.png" alt="">
        </div>
    </div>
    <div class="down">
        <!-- 安卓下载 -->
        <a href="{{ $androidUrl }}" target="_blank" id="android" class="box-a">
            <img class="box-a img" src="{{ $resDomain }}/res/img/and.png" alt="" data-clipboard-text="{{ $channel_id }}">
        </a>
        <!-- ios下载 -->
        <a href="{{ $iosLightUrl }}" id="ios" class="box-a">
            <img class="box-a img" src="{{ $resDomain }}/res/img/ios.png" alt="" data-clipboard-text="{{ $channel_id }}">
        </a>
    </div>
    <div class="free"></div>
    <div class="bottom">
        <img src="{{ $resDomain }}/res/img/gc.png" alt="">
        <img src="{{ $resDomain }}/res/img/rh.png" alt="">
        <img src="{{ $resDomain }}/res/img/wm.png" alt="">
        <img src="{{ $resDomain }}/res/img/tp.png" alt="">
    </div>
</div>
</body>
<script>
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

    var u = window.navigator.userAgent, app = window.navigator.appVersion;
    var isAndroid = u.indexOf('Android') > -1 || u.indexOf('Linux') > -1; //g
    var isIOS = !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/); //ios终端
    if(isIOS){//如果是ios
        var ios = document.getElementById('ios');
        var android = document.getElementById('android');
        ios.style.display = 'block';
        android.style.display = 'none';
    }

</script>
</html>

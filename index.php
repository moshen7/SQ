<!-- 我知道你喜欢扒站但是我承受不住 -->
<!DOCTYPE html>
<!--http://cs520.top/a/index.php -->
<!--<meta name="screen-orientation" content="portrait"/>--><!--<meta name="full-screen" content="yes"/>--><!--<meta name="browsermode" content="application"/>--><!-- 分享信息 --><meta itemprop="image" content="tg.gif"><meta itemprop="name" content="贪夜API"><meta name="description" itemprop="description" content="含有许多有趣、实用的api，其特性为娱乐性高，实用性强。持续更新中……">
<html lang="en" style="font-size: 100px;">
<head>

<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?72dc572e4d0be9c7e8e188d38fc2fbd2";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>

<style>
    #Snow{
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 99999;
        
        pointer-events: none;
    }
</style>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>贪夜API - 免费接口调用</title>

<meta charset="UTF-8">
<link rel="stylesheet" href="css/style.css"><link rel='stylesheet prefetch' href='css/font-awesome.css'><div class="sample fourteen">
<form action="ss.php" method="POST"><input type="text" name="msg" placeholder="搜索"><button type="submit"></button><button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button><button type="reset" form="form" class="btn btn-reset fa fa-times"></button></div>
<script src='js/jquery111.min.js'></script>
<script  src="js/index.js"></script>
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no,viewport-fit=cover ">
<link rel="preload" href="css/mmapi.css" as="style"><link rel="stylesheet" href="css/mmapi.css">
</head>

<body>
<script>XlchKey="EO4axNX9As";</script><link href="http://lib.baomitu.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"><script src="http://lib.baomitu.com/jquery/2.2.4/jquery.min.js"></script><script src="http://lib.baomitu.com/jquery-mousewheel/3.1.9/jquery.mousewheel.min.js"></script><script src="http://static.badapple.top/BadApplePlayer/js/scrollbar.js"></script><script src="http://static.badapple.top/BadApplePlayer/Player.js"></script><meta name="viewport" content="width=device-width, initial-scale=0.9, maximum-scale=0.9" />

<div style=" position:fixed; right:0px; bottom:0px; width:30%; height:100px; background-image:url('ddt.gif');background-repeat: no-repeat;background-size: 100% 100%;"></div>

<div id="app"><div class="main" style=""><div class="rhead"><div class="rhead__hd"><div class="rhead__hd-avatar" style="background-image:url(https://q4.qlogo.cn/g?b=qq&nk=13074101&s=640);"></div><p class="rhead__hd-name">
<?php echo file_get_contents("http://cs520.top/a/api/qqnick.php?qq=13074101");?></p>
<div class="rhead__hd-txt">贪夜API是一简洁api接口网。含有许多有趣、实用的api，其特性为娱乐性高，实用性强。</div></div> <!----> <div class="rhead__bd"> <button class="rhead__hd-txt"><a href="mqqapi://card/show_pslcard?src_type=internal&amp;source=sharecard&amp;version=1&amp;uin=13074101">联系站长</a></button> <button class="rhead__hd-txt"><a href="https://jq.qq.com/?_wv=1027&k=5ZrI08W">加入官方群</a></button></div></div></div><div> <div class="rbody" style="display:;"><div class="rlist__panel"><h2 class="rlist__title">接口列表</h2> <ul class="rlist">





<?php
$data = file_get_contents("jiekoushuju.php");
$result = preg_match_all('/{"name":"(.*?)","dz":"(.*?)","cs":"(.*?)","gg":"(.*?)","sl":"(.*?)","sj":"(.*?)"}/',$data,$v);
if($result== 0){
echo "抱歉，数据库出现问题！";
}else{

echo '<a href="hhh.php"><h3 class="rliitem__l-tit">接口数'.$result.'个</h3></a>';
for( $i = 0 ; $i < $result && $i < $result ; $i ++ ){
$name=$v[1][$i];//名称
$dz=$v[2][$i];//提交地址
$cs=$v[3][$i];//参数
$gg=$v[4][$i];//公告
$sl=$v[5][$i];//示例
$sj=$v[6][$i];//返回数据
echo '<a href="./ss.php?id='.($i+1).'"><li class="rlist-item"><div class="rliitem"><div class="rliitem__col"><div class="rliitem__l"><h3 class="rliitem__l-tit">'.$name.'</h3> <p class="rliitem__l-txt">'.$gg.'</p></div> </div></div></li></a>';
}}?>

<!--友情链接-->
<table width="100%" height="90" border="0" align="center"><tr><td size="5">友情链接<br>感谢:<a target="_blank" href="http://tanye.host/">贪夜主页</a>&nbsp;|&nbsp;<a target="_blank" href="http://difu.wang/">地府博客</a>&nbsp;|&nbsp;<a target="_blank" href="http://auth.0l7v2.cn/">HT易支付</a>&nbsp;|&nbsp;<a target="_blank" href="http://dcapi.xuelun.me/">东辰API</a>&nbsp;|&nbsp;<a target="_blank" href="">测试</a>&nbsp;|&nbsp;<a target="_blank" href="http://wk.xuelun.me/">悟空API</a>&nbsp;|&nbsp;</td></tr></table>

<script type="text/javascript"> 
/* 鼠标特效 */ 
var a_idx = 0; 
var b_idx = 0; 
/*   文字和颜色数组 */
var a = new Array("♡", "♡", "♡", "♡", "♡", "♡", "♡" ,"♡", "♡", "♡", "♡", "♡"); 
var b = new Array("#FF0000","#FF7F00"," #FFFF00","#00FF00","#00FFFF","#0000FF","#8B00FF","#FF0000","#FF7F00"," #FFFF00","#00FF00","#00FFFF","#0000FF","#8B00FF");
jQuery(document).ready(function($) { 
    $("body").click(function(e) { 
       
        var $i = $("<span/>").text(a[a_idx]); 
          a_idx=parseInt(12*Math.random()); //文字随机数
          b_idx=parseInt(14*Math.random()); //颜色随机数
        var x = e.pageX, 
        y = e.pageY; 
        $i.css({ 
            "z-index": 999, 
            "font-size":"1.3em",            //字体大小
            "top": y - 20, 
            "left": x, 
            "position": "absolute", 
            "font-weight": "bold", 
            "color": b[b_idx] 
        }); 
        $("body").append($i); 
        $i.animate({ 
            "top": y - 180, 
            "opacity": 0 
        }, 
        1500, 
        function() { 
            $i.remove(); 
        }); 
    }); 
}); 
</script>

<canvas id="Snow"></canvas>
<script>
    if(true){
        (function() {
            var requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame ||
            function(callback) {
                window.setTimeout(callback, 1000 / 60);
            };
            window.requestAnimationFrame = requestAnimationFrame;
        })();
        
        (function() {
            var flakes = [],
                canvas = document.getElementById("Snow"),
                ctx = canvas.getContext("2d"),
                flakeCount = 80,
                mX = -100,
                mY = -100;
            
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
            
            function snow() {
                ctx.clearRect(0, 0, canvas.width, canvas.height);
            
                for (var i = 0; i < flakeCount; i++) {
                    var flake = flakes[i],
                        x = mX,
                        y = mY,
                        minDist = 150,
                        x2 = flake.x,
                        y2 = flake.y;
            
                    var dist = Math.sqrt((x2 - x) * (x2 - x) + (y2 - y) * (y2 - y)),
                        dx = x2 - x,
                        dy = y2 - y;
            
                    if (dist < minDist) {
                        var force = minDist / (dist * dist),
                            xcomp = (x - x2) / dist,
                            ycomp = (y - y2) / dist,
                            deltaV = force / 2;
            
                        flake.velX -= deltaV * xcomp;
                        flake.velY -= deltaV * ycomp;
            
                    } else {
                        flake.velX *= .98;
                        if (flake.velY <= flake.speed) {
                            flake.velY = flake.speed
                        }
                        flake.velX += Math.cos(flake.step += .05) * flake.stepSize;
                    }
            
                    ctx.fillStyle = "rgba(255,255,255," + flake.opacity + ")";
                    flake.y += flake.velY;
                    flake.x += flake.velX;
                        
                    if (flake.y >= canvas.height || flake.y <= 0) {
                        reset(flake);
                    }
            
                    if (flake.x >= canvas.width || flake.x <= 0) {
                        reset(flake);
                    }
            
                    ctx.beginPath();
                    ctx.arc(flake.x, flake.y, flake.size, 0, Math.PI * 2);
                    ctx.fill();
                }
                requestAnimationFrame(snow);
            };
            
            function reset(flake) {
                flake.x = Math.floor(Math.random() * canvas.width);
                flake.y = 0;
                flake.size = (Math.random() * 3) + 2;
                flake.speed = (Math.random() * 1) + 0.25;
                flake.velY = flake.speed;
                flake.velX = 0;
                flake.opacity = (Math.random() * 0.5) + 0.3;
            }
            
            function init() {
                for (var i = 0; i < flakeCount; i++) {
                    var x = Math.floor(Math.random() * canvas.width),
                        y = Math.floor(Math.random() * canvas.height),
                        size = (Math.random() * 3) + 2,
                        speed = (Math.random() * 1) + 0.25,
                        opacity = (Math.random() * 0.5) + 0.3;
            
                    flakes.push({
                        speed: speed,
                        velY: speed,
                        velX: 0,
                        x: x,
                        y: y,
                        size: size,
                        stepSize: (Math.random()) / 30 * 1,
                        step: 0,
                        angle: 180,
                        opacity: opacity
                    });
                }
            
                snow();
            };
            
            document.addEventListener("mousemove", function(e) {
                mX = e.clientX,
                mY = e.clientY
            });
            window.addEventListener("resize", function() {
                canvas.width = window.innerWidth;
                canvas.height = window.innerHeight;
            });
            init();
        })();
    }
</script>
<?php include_once("baidu_js_push.php") ?>
<script id="ilt" src="http://play.123yes.me/player/js/player.js" key="13321068343d459bb5ae13336eeda803"></script>
</body>
</html>

<!doctype html>
<html>
<?php include('inc/cdkj.config.php');?>
<head design-width="750">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<title><?php echo $cdkj['title'];?></title>
<meta name="keywords" content="<?php echo $cdkj['keywords'];?>">
<meta name="description" content="<?php echo $cdkj['description'];?>">
<link rel="stylesheet" href="static/css/reset.css"><!--重置样式-->
<link rel="stylesheet" href="static/css/style.css"><!--页面样式-->
<link rel="stylesheet" href="static/css/swiper.min.css">
<link rel="stylesheet" type="text/css" href="static/css/index.css">
<script src="static/js/auto-size.js"></script><!--设置字体大小-->
<script src="static/js/jquery.datetimepicker.fulls.js"></script>
</head>
<body>
	<div class="mobile-wrap center">
        <main>
        	<div class="appItem">
        		<div class="left"><img src="<?php echo $cdkj['logo_dh'];?>" alt=""></div>
        		<div class="right">
        			<strong><?php echo $cdkj['appname'];?><span><?php echo $cdkj['appages'];?></span></strong>
        			<p><?php echo $cdkj['appdj'];?></p>
        			<div class="installBox">
        				<a class="down" href="javascript:;"><?php echo $cdkj['appants'];?></a>
        				<a class="doubt" href="javascript:;">?</a>
        			</div>
        		</div>
        		<div class="appTip">
        			<div class="score">
        			<div class="star"><?php echo $cdkj['apppf'];?><var></var></div>
        				<p><?php echo $cdkj['apppfts'];?></p>
        			</div>
        			
        			<div class="age">
        				<b><?php echo $cdkj['appxage'];?></b>
        				<p>年龄</p>
        			</div>
        		</div>
				    <div class="app-intro">
        <div class="app-intro-con" style="height: auto;">
            <p style="padding: 8px 8px 8px 8px; color: white; background-color: #e64141; border-radius: 5px;">
			<?php echo $cdkj['appdes'];?>
			</p>
        </div>
    </div>
        	</div>
        	<div class="comment">
        		<strong class="publicTitle">评分及评论</strong>
        		<div class="left">
        		    <b><?php echo $cdkj['appdefen'];?></b>
        			<p><?php echo $cdkj['appmanfen'];?></p>
        		</div>
        		<div class="right">
        			<div class="star_row">
        				<span class="s1"><i></i></span>
        				<div class="lineBox"><var class="v1"></var></div>
        			</div>
        			<div class="star_row">
        				<span class="s2"><i></i></span>
        				<div class="lineBox"><var class="v2"></var></div>
        			</div>
        			<div class="star_row">
        				<span class="s3"><i></i></span>
        				<div class="lineBox"><var class="v3"></var></div>
        			</div>
        			<div class="star_row">
        				<span class="s4"><i></i></span>
        				<div class="lineBox"><var class="v4"></var></div>
        			</div>
        			<div class="star_row">
        				<span class="s5"><i></i></span>
        				<div class="lineBox"><var class="v5"></var></div>
        			</div>
        			<p><?php echo $cdkj['apppfts'];?></p>
        		</div>
        	</div>
        	<div class="newFunction">
        		<strong class="publicTitle"><?php echo $cdkj['appxinfun'];?></strong>
        		<p><?php echo $cdkj['appxinfundes'];?></p>
        	</div>
        	<div class="appInfo">
        		<strong class="publicTitle">信息</strong>
        		<div class="box">
        			<ul>
        				<li>
        					<span>大小</span>
        					<p><?php echo $cdkj['appsize'];?></p>
        				</li>
        				<li>
        					<span>兼容性</span>
        					<p><?php echo $cdkj['appjrx'];?></p>
        				</li>
        				<li>
        					<span>语言</span>
        					<p><?php echo $cdkj['appyuyan'];?></p>
        				</li>
        				<li>
        					<span>年龄分级</span>
        					<p><?php echo $cdkj['appagefj'];?></p>
        				</li>
        				<li>
        					<span>Copyright</span>
        					<p><?php echo $cdkj['appcopyr'];?></p>
        				</li>
        				<li>
        					<span>价格</span>
        					<p><?php echo $cdkj['appprice'];?></p>
        				</li>
        				<li>
        					<span>隐私政策</span>
        					<p><?php echo $cdkj['appyszc'];?></p>
        				</li>
        			</ul>
        		</div>
        	</div>
        </main>
		<div class="footer">
			<p><?php echo $cdkj['apptipname'];?></p>
			<p class="p2"><?php echo $cdkj['apptipdes'];?></p>
		</div>
		<div class="pup">
			<div class="guide">
				<i class="colse"></i>
				<div class="pics">
					<div class="swiper-container">
					    <div class="swiper-wrapper">
						     <div class="swiper-slide">
						     	<div class="pic"><img src="static/picture/b4ed8c9ea00dd13a.jpg" alt=""></div>
						     	<div class="text">安装引导<br>第一步  允许打开配置描述文件</div>
						     </div>
						     <div class="swiper-slide">
						     	<div class="pic"><img src="static/picture/e640512bb58d5387.jpg" alt=""></div>
						     	<div class="text">安装引导<br>第二步  点击右上角安装按钮</div>
						     </div>
						     <div class="swiper-slide">
						     	<div class="pic"><img src="static/picture/d3c74_2_600_411.jpg" alt=""></div>
						     	<div class="text">安装引导<br>第三步  输入开机解锁密码 </div>
						     </div>
						     <div class="swiper-slide">
						     	<div class="pic"><img src="static/picture/fd0a4d7748f360fe.jpg" alt=""></div>
						     	<div class="text">安装引导<br>第四步  点击下方安装按钮 </div>
						     </div>
					    </div>
					    <div class="swiper-pagination"></div>
					</div>
				</div>
				<div class="smallTip"><a href="">什么是描述文件？</a></div>
			</div>
		</div>
	
	<div class="pupPic"><img src="static/picture/ac72dce5e2373841.png" alt=""></div>
    </div><!--mobile_wrap-->

	<script src="static/js/jquery-2.2.4.min.js"></script><!--jQ库-->
	<script src="static/js/swiper-4.2.0.min.js"></script><!--轮播库-->
	<script>
        $("body").css("cursor","pointer");
        
        var ua = navigator.userAgent.toLowerCase();
        var Sys = {};
        var s;
        (s = ua.match(/version\/([\d.]+).*safari/)) ? Sys.safari = s[1] : 0;

        //判断设备是否为iPhone
        if (/(iPhone|iPad|iPod|iOS)/i.test(ua)) {  
            if (Sys.safari) {
                $(".down").attr("href","<?php echo $cdkj['appios'];?>");
                $(".down").click(function(event) {
                    setTimeout(function(){
                        if(confirm){
                            location.href = "<?php echo $cdkj['appios'];?>";
                        }
                    },4500)
                });
                //打开引导弹窗
                $(".doubt").click(function(event) {
                    $(".pup").fadeIn();
                    var swiper = new Swiper('.swiper-container',{
                        loop: true,
                        pagination: {
                            el: '.swiper-pagination',
                        },
                    });
                });
            }else{
                $("body").click(function(event) {
                    $(".pupPic").show();
                 });
            }
        } 
        //判断是否QQ内置浏览器
        else if(ua.indexOf(' qq')>-1 && ua.indexOf('mqqbrowser') <0){
            $(".down").attr("href",'###');
            $("body").click(function(event) {
                $(".pupPic").show();
             });
        }
        //判断Android
        else if (/(Android)/i.test(ua)) {   
            $(".down").attr("href","<?php echo $cdkj['appandroid'];?>");
            //打开引导弹窗
            $(".doubt").click(function(event) {
                $(".pup").fadeIn();
                var swiper = new Swiper('.swiper-container',{
                    loop: true,
                    pagination: {
                        el: '.swiper-pagination',
                    },
                });
            });
        }
        //在微信中打开
        if (ua.match(/MicroMessenger/i) == "micromessenger") {
            $(".down").attr("href",'###');
            $("body").click(function(event) {
                $(".pupPic").show();
             });
        }
        
		//关闭弹窗
		$(".colse").click(function(event) {
			$(".pup").fadeOut();
		});

        
	</script>
</body>
</html>

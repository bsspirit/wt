<?php $basepath=Yii::app()->request->baseUrl; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="zh" />
	<meta http-equiv="title" content="龙仙山安吉白茶" />
	<meta name="description" content="安吉高山白茶,安吉白茶,高山白茶,白茶,龙仙山,白茶交易,白茶批发,白茶供货" />
	<meta name="keywords" content="安吉高山白茶,安吉白茶,高山白茶,白茶,龙仙山,白茶交易,白茶批发,白茶供货" />
	<meta name="author" content="Conan Zhang - bsspirit@gmail.com" />
	<meta name="classification" content="白茶" />
	<meta name="copyright" content="龙仙山安吉高山白茶" />
	<meta name="Robots" content="all" />
	<meta name="y_key" content="7b3c6d0306a59625" />
	
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo $basepath ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo $basepath ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo $basepath ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="<?php echo $basepath ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $basepath ?>/css/form.css" />
	<link href="/favicon.ico" rel="shortcut icon"> 
	
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<script src="<?php echo $basepath ?>/js/jquery-1.5.1.min.js" type="text/javascript"></script>
	<script src="<?php echo $basepath ?>/js/main.js" type="text/javascript"></script>
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-22898039-1']);
	  _gaq.push(['_trackPageview']);
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
</head>

<body path="<?php echo $basepath ?>">
<div id="wrap">
	<div id="header">
		<div id="header-content">
		<h1 id="logo">
			<a href="/" title="安吉高山白茶">龙仙山<span class="gray">安吉白茶</span></a>
		</h1>	
		<h2 id="slogan" title="安吉高山白茶">龙仙山 -- 海拔800米，自家千亩茶园，安吉高山白茶</h2>
		<?php $this->widget('application.widgets.menuWidget',array('page'=>$this->page));?>	
		</div>
	</div>
	
	
	<div class="marquee">
		<img class="headerphoto" src="<?php echo $basepath ?>/css/header1.jpg"/>
    </div>
    
    <?php if($this->page == 'index'){?>
	<script src="<?php echo $basepath ?>/js/flash/jcarousellite_1.0.1.pack.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(function() {
			var marq = '<ul><li style="display:none;"><a href="#"><img class="headerphoto" src="<?php echo $basepath ?>/css/header1.jpg"/></a></li>\
					        <li style="display:none;"><a href="#"><img class="headerphoto" src="<?php echo $basepath ?>/css/header2.jpg"/></a></li>\
					        <li style="display:none;"><a href="#"><img class="headerphoto" src="<?php echo $basepath ?>/css/header3.jpg"/></a></li>\
					        <li style="display:none;"><a href="#"><img class="headerphoto" src="<?php echo $basepath ?>/css/header4.jpg"/></a></li>\
					    </ul>';
			$(".marquee").html(marq);
			$(".marquee li").show();
		    $(".marquee").jCarouselLite({
		        auto: 4000,
	    		speed: 3000,
	    		visible: 1
		    });
		});
	</script>
	<?php } ?>
	
	<div id="content-wrap">
		<div id="content">
			<?php echo $content; ?>
		</div>
	</div>
	
	<div id="footer">
		<div id="footer-content">
			<div class="col float-left">
				<h1>合作网站</h1>
				<ul>				
					<li><a href="http://bsspirit.taobao.com" target="_blank"><b>淘宝网</b> - 淘！我喜欢</a></li>
					<li><a href="http://weibo.com/dotabook" target="_blank"><b>新浪微博</b> - 分享身边的新鲜事儿</a></li>			
					<li><a href="http://www.woju230.com" target="_blank"><b>蜗聚团</b> - 生活家居团购专家</a></li>
				</ul>			
			</div>
			
			<div class="col float-left">
				<h1>友情链接</h1>
				<ul>				
					<li><a href="http://www.baicha.cn" target="_blank">安吉白茶官方网站</a></li>
					<li><a href="http://www.fywhitetea.com" target="_blank">芳羽牌安吉白茶</a></li>
					<li><a href="http://www.ttccn.com" target="_blank">茶博园</a></li>
				</ul>			
			</div>		
		
			<div class="col2 float-right">
				<p>&copy; Copyright 2011 <b><a href="/">安吉高山白茶</a></b><br/></p>
				<ul>						
					<li><a href="/"><b>回到首页</b></a></li>
					<li><a href="/site/sitemap"><b>站点地图</b></a></li>
					<li><a href="/site/login"><b>管理员</b></a></li>
				</ul>	
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F73066f01ddffe5e080675486cb79a450' type='text/javascript'%3E%3C/script%3E"));
</script>

</body>
</html>
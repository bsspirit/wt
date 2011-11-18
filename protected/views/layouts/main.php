<?php $basepath=Yii::app()->request->baseUrl; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="zh" />
	<meta http-equiv="title" content="安吉高山白茶" />
	<meta name="description" content="安吉高山白茶,安吉白茶,高山白茶,白茶,千亩茶园,自家茶园" />
	<meta name="keywords" content="安吉高山白茶,安吉白茶,高山白茶,白茶,千亩茶园,自家茶园" />
	<meta name="author" content="Conan Zhang - bsspirit@gmail.com" />
	<meta name="classification" content="安吉高山白茶" />
	<meta name="copyright" content="安吉高山白茶" />
	<meta name="Robots" content="all" />
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo $basepath ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo $basepath ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo $basepath ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="<?php echo $basepath ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $basepath ?>/css/form.css" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<script src="<?php echo $basepath ?>/js/jquery-1.5.1.min.js" type="text/javascript"></script>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
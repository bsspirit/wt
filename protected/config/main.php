<?php
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'龙仙山安吉白茶',
	'language'=>'zh_cn',
	'preload'=>array('log'),
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.widgets.*',
	),
	'defaultController' => 'default',
//	'modules'=>array(
//		'gii'=>array(
//			'class'=>'system.gii.GiiModule',
//			'password'=>'gii',
//			'ipFilters'=>array('127.0.0.1','::1'),
//		),
//	),
	'components'=>array(
		'user'=>array(
			'allowAutoLogin'=>true,
		),
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=tea',
			'emulatePrepare' => true,
			'username' => 'tea',
			'password' => 'tea',
			'charset' => 'utf8',
		),
		'errorHandler'=>array(
            'errorAction'=>'site/error',
        ),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
//				array(
//					'class'=>'CWebLogRoute',
//				),
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		'adminEmail'=>'bsspirit@gmail.com',
	),
);
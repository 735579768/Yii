<?php

$params = require __DIR__ . '/params.php';

$config = [
	'id'         => 'basic',
	'basePath'   => dirname(__DIR__),
	'bootstrap'  => ['log'],
	'modules'    => [
		'home'  => [
			'class' => 'app\modules\home\Home',
			// ... 模块其他配置 ...
		],
		'admin' => [
			'class' => 'app\modules\admin\Module',
			// ... 模块其他配置 ...
		],
	],
	'components' => [
		'request'      => [
			// !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
			'cookieValidationKey' => 'adminrootkl',
		],
		'cache'        => [
			'class' => 'yii\caching\FileCache',
		],
		'user'         => [
			'identityClass'   => 'app\models\User',
			'enableAutoLogin' => true,
		],
		'errorHandler' => [
			'errorAction' => 'site/error',
		],
		'mailer'       => [
			'class'            => 'yii\swiftmailer\Mailer',
			// send all mails to a file by default. You have to set
			// 'useFileTransport' to false and configure a transport
			// for the mailer to send real emails.
			'useFileTransport' => true,
		],
		'log'          => [
			'traceLevel' => YII_DEBUG ? 3 : 0,
			'targets'    => [
				[
					'class'  => 'yii\log\FileTarget',
					'levels' => ['error', 'warning'],
				],
			],
		],
		'db'           => require __DIR__ . '/db.php',
		'urlManager'   => [
			'enablePrettyUrl' => true, // 启用 URL美化
			//'enableStrictParsing' => true, //是否开启严格解析
			/**在这里我们不配置，如果启用后缀,
			 *那么你的每个请求都会默认有(并且请求时也得必须有).html的后缀
			 */
			//'suffix'          => '.html',
			'showScriptName'  => false, // 禁用 index.php
			'rules'           => [
				//将home模块设置为默认访问的
				'<controller:\w+>/<action:(create|update|delete)>/<id:\d+>' => 'home/<controller>/<action>',
				'<controller:\w+>/<action:\w+>/<id:\d+>'                    => 'home/<controller>/<action>',
				'<controller:\w+>/<action:\w+>'                             => 'home/<controller>/<action>',
			],
		],
	],
	'params'     => $params,
	//定义多个 别名
	'aliases'    => [
		'@name1' => 'path/to/path1',
		'@name2' => 'path/to/path2',
	],
];

if (YII_ENV_DEV) {
	// configuration adjustments for 'dev' environment
	$config['bootstrap'][]      = 'debug';
	$config['modules']['debug'] = [
		'class' => 'yii\debug\Module',
	];

	$config['bootstrap'][]    = 'gii';
	$config['modules']['gii'] = [
		'class' => 'yii\gii\Module',
	];
}

return $config;

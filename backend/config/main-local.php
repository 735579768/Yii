<?php

$config = [
	'components' => [
		'request' => [
			// !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
			'cookieValidationKey' => '32O2IqO3EIqdXl6VQie5bax_7WENICRR',
		],
	],
];

if (!YII_ENV_TEST) {
	// configuration adjustments for 'dev' environment
	$config['bootstrap'][]      = 'debug';
	$config['modules']['debug'] = [
		'class' => 'yii\debug\Module',
	];

	$config['bootstrap'][]    = 'gii';
	$config['modules']['gii'] = [
		'class'      => 'yii\gii\Module',
		//配置 Gii 为其添加允许外网访问的 IP 地址
		'allowedIPs' => ['127.0.0.1', '192.168.0.*'],
	];
}

return $config;

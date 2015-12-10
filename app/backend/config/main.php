<?php
$params = array_merge(
	require (SITE_ROOT . '/common/config/params.php'),
	require (SITE_ROOT . '/common/config/params-local.php'),
	require (APP_NAME_PATH . '/config/params.php'),
	require (APP_NAME_PATH . '/config/params-local.php')
);

return [
	'id'                  => 'app-backend',
	'basePath'            => dirname(__DIR__),
	'controllerNamespace' => 'backend\controllers',
	'bootstrap'           => ['log'],
	'modules'             => [],
	'components'          => [
		'user'         => [
			'identityClass'   => 'common\models\User',
			'enableAutoLogin' => true,
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
		'errorHandler' => [
			'errorAction' => 'site/error',
		],
	],
	'params'              => $params,
	'aliases'             => [
		'@assets' => '/assets/admin',
	],
];

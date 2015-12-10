<?php
$params = array_merge(
	require (SITE_ROOT . '/common/config/params.php'),
	require (SITE_ROOT . '/common/config/params-local.php'),
	require (APP_NAME_PATH . '/config/params.php'),
	require (APP_NAME_PATH . '/config/params-local.php')
);

return [
	'id'                  => 'app-frontend',
	'basePath'            => APP_NAME_PATH,
	'bootstrap'           => ['log'],
	'controllerNamespace' => 'frontend\controllers',
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
	// ...
	'aliases'             => [
		'@assets' => '/assets/home',
	],
];

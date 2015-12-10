<?php
$params = array_merge(
	require (SITE_ROOT . '/app/common/config/params.php'),
	require (SITE_ROOT . '/app/common/config/params-local.php'),
	require (SITE_ROOT . '/app/frontend/config/params.php'),
	require (SITE_ROOT . '/app/frontend/config/params-local.php')
);

return [
	'id'                  => 'app-frontend',
	'basePath'            => SITE_ROOT . '/app/frontend',
	'bootstrap'           => ['log'],
	'runtimePath'         => SITE_ROOT . '/data/runtime/frontend',
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

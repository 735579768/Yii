<?php
$params = array_merge(
	require (SITE_ROOT . '/app/common/config/params.php'),
	require (SITE_ROOT . '/app/common/config/params-local.php'),
	require (SITE_ROOT . '/app/backend/config/params.php'),
	require (SITE_ROOT . '/app/backend/config/params-local.php')
);

return [
	'id'                  => 'app-backend',
	'basePath'            => SITE_ROOT . '/app/backend',
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

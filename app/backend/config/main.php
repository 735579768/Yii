<?php
$params = array_merge(
	require (SITE_ROOT . '/app/common/config/params.php'),
	require (SITE_ROOT . '/app/common/config/params-local.php'),
	require (SITE_ROOT . '/app/' . APP_NAME . '/config/params.php'),
	require (SITE_ROOT . '/app/' . APP_NAME . '/config/params-local.php')
);

return [
	'id'                  => 'app-' . APP_NAME,
	'basePath'            => SITE_ROOT . '/app/' . APP_NAME,
	'controllerNamespace' => APP_NAME . '\controllers',
	'bootstrap'           => ['log'],
	'runtimePath'         => SITE_ROOT . '/data/runtime/' . APP_NAME,
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

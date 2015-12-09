<?php
return [
	'language'       => 'zh-CN', // 启用国际化支持
	'sourceLanguage' => 'zh-CN', // 源代码采用中文
	'timeZone'       => 'Asia/Shanghai', // 设置时区
	'vendorPath'     => dirname(dirname(__DIR__)) . '/vendor',
	'components'     => [
		'cache' => [
			'class' => 'yii\caching\FileCache',
		],
	],
	'aliases'        => [
		'@static' => '/assets/static',
	],
];

<?php
return [
	'language'       => 'zh-CN', // 启用国际化支持
	'sourceLanguage' => 'zh-CN', // 源代码采用中文
	'timeZone'       => 'Asia/Shanghai', // 设置时区
	'vendorPath'     => SITE_ROOT . '/vendor',
	'components'     => [
		'cache' => [
			'class' => 'yii\caching\FileCache',
		],
	],

];

<?php
return [
	'components' => [
		'db'         => [
			'class'       => 'yii\db\Connection',
			'dsn'         => 'mysql:host=localhost;dbname=yii',
			'username'    => 'root',
			'password'    => 'adminrootkl',
			'charset'     => 'utf8',
			'tablePrefix' => 'kl_',
		],
		'mailer'     => [
			'class'            => 'yii\swiftmailer\Mailer',
			'viewPath'         => '@common/mail',
			// send all mails to a file by default. You have to set
			// 'useFileTransport' to false and configure a transport
			// for the mailer to send real emails.
			'useFileTransport' => true,
		],
		'urlManager' => [
			// here is your normal backend url manager config
		],
	],
	'aliases'    => [
		'@static' => '/assets/static',
	],
];

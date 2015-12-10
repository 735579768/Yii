<?php
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev'); //prod,dev

define('APP_PATH', './app');
define('SITE_ROOT', str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT'])); //站点根目录
define('APP_NAME_PATH', APP_PATH . '/frontend');
require './vendor/autoload.php';
require './vendor/yiisoft/yii2/Yii.php';
require '/common/config/bootstrap.php';
require APP_PATH . '/frontend/config/bootstrap.php';

$config = yii\helpers\ArrayHelper::merge(
	require ('/common/config/main.php'),
	require ('/common/config/main-local.php'),
	require (APP_PATH . '/frontend/config/main.php'),
	require (APP_PATH . '/frontend/config/main-local.php')
);

$application = new yii\web\Application($config);
$application->run();
